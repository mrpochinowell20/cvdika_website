<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        $produk = DB::table('products')
            ->select('*')
            ->get();
        $produk_masuk = DB::table('products')
            ->select('*')
            ->whereNull('date_out')
            ->count();
        $produk_keluar = DB::table('products')
            ->select('*')
            ->where('date_out', '!=', null)
            ->count();
        $products = DB::table('products')->select('*')->get();
        $totalProfit = 0;

        foreach ($products as $product) {
            if (!empty($product->range_sold)) {
                $costPrice = $product->range_ori;
                $sellingPrice = $product->range_sold;
                $profit = $sellingPrice - $costPrice;
                $totalProfit += $profit;
            }
        }
        $laba = $totalProfit;

        $riwayat_produk = DB::table('products')
            ->select('*')
            ->count();
        $dataPie = DB::table('products')
            ->select('name', DB::raw('COUNT(*) as total'))
            ->whereNotNull('date_out')
            ->groupBy('name')
            ->orderByDesc('total')
            ->limit(3)
            ->get();

        $data = DB::table('products')
            ->select(DB::raw("DATE_FORMAT(created_at, '%Y-%m') as month"), 'name', DB::raw('COUNT(*) as total'))
            ->whereNotNull('date_out')
            ->groupBy('month', 'name')
            ->orderBy('month')
            ->orderByDesc('total')
            ->get();

        $labels = $data
            ->pluck('month')
            ->unique()
            ->map(function ($item) {
                return \Carbon\Carbon::createFromFormat('Y-m', $item)->format('F');
            });

        $datasets = [];

        $uniqueNames = $data->pluck('name')->unique();

        foreach ($uniqueNames as $name) {
            $totals = $data->where('name', $name)->pluck('total');
            $datasets[] = [
                'label' => $name,
                'data' => $totals,
                'backgroundColor' => 'rgba(54, 162, 235, 0.7)',
                'borderColor' => 'rgba(54, 162, 235, 1)',
                'borderWidth' => 1,
            ];
        }

        $topProducts = DB::table('products')
            ->select('name')
            ->whereYear('date_out', 2023)
            ->groupBy('name')
            ->orderByRaw('count(date_out) DESC')
            ->limit(4)
            ->pluck('name')
            ->toArray();

        $productCounts = DB::table('products')
            ->select(DB::raw('count(date_out) as count'))
            ->whereIn('name', $topProducts)
            ->whereYear('date_out', 2023)
            ->groupBy('name')
            ->pluck('count')
            ->toArray();

        return view('admin/dashboard', compact('produk_masuk', 'produk_keluar', 'riwayat_produk', 'laba',
        'produk', 'dataPie', 'labels', 'datasets', 'topProducts', 'productCounts'));
    }
    public function userManagement()
    {
        $users = DB::table('users')
            ->where('level', 'Admin')
            ->get();
        return view('admin/user-management', compact('users'));
    }
    public function createUser(Request $req)
    {
        DB::table('users')->insert([
            'username' => $req->username,
            'name' => $req->name,
            'level' => $req->level,
            'password' => md5($req->password),
        ]);
        return back();
    }
    public function updateUser(Request $req)
    {
        DB::table('users')
            ->where('id', $req->id)
            ->update([
                'name' => $req->name,
                'level' => $req->level,
            ]);
        return back();
    }
    public function deleteUser(Request $req)
    {
        DB::table('users')
            ->where('id', $req->id)
            ->delete();
        return back();
    }
    public function product()
    {
        $products = DB::table('products')->get();
        return view('admin.product', compact('products'));
    }
    public function updateProduct(Request $req)
    {
        // dd($req->all());
        DB::table('products')
            ->where('id', $req->id)
            ->update([
                'range_sold' => $req->range_sold,
                'date_out' => $req->date_out,
            ]);
        return back();
    }
    public function inProduct()
    {
        // $inProducts = DB::table('products')
        //                 ->leftJoin('citys', 'products.locations', '=', 'citys.id')
        //                 ->where('range_sold', NULL)
        //                 ->get();
        $inProducts = DB::table('products')
            ->join('citys', 'products.locations', 'citys.id')
            ->select('products.*', 'citys.city as nama_kota')
            ->orderBy('products.id', 'DESC')
            ->get();
        $citys = DB::table('citys')->get();
        return view('admin.in-product', compact('inProducts', 'citys'));
    }
    public function createInProduct(Request $req)
    {
        $tanggal = explode('-', $req->date_in);
        $namaFile = strtoupper(md5(time())) . '.' . $req->image->getClientOriginalExtension();
        $folder = '../public/image';
        $save = $req->image->move($folder, $namaFile);
        if ($save) {
            DB::table('products')->insert([
                'name' => $req->name,
                'type' => $req->type,
                'image' => $namaFile,
                'year' => $req->year,
                'colour' => $req->colour,
                'transmisi' => $req->transmisi,
                'bahan_bakar' => $req->bahan_bakar,
                'description' => $req->description,
                'range_ori' => $req->range_ori,
                'conditions' => $req->conditions,
                'locations' => $req->city,
                'date_in' => mktime(12, 0, 0, $tanggal[1], $tanggal[2], $tanggal[0]),
            ]);
        }
        return back();
    }
    public function detailInProduct(Request $req)
    {
        $gambar = base64_encode(file_get_contents(public_path('logo.png')));

        $data = DB::table('products')
            ->select('*')
            ->get();
        $pdf = PDF::loadView('cetak', compact('data', 'gambar'));
        return $pdf->download('nota.pdf');
    }
    public function updateInProduct(Request $req)
    {
        $tanggal = explode('-', $req->date_in);
        DB::table('products')
            ->where('id', $req->id)
            ->update([
                'name' => $req->name,
                'type' => $req->type,
                'year' => $req->year,
                'colour' => $req->colour,
                'transmisi' => $req->transmisi,
                'bahan_bakar' => $req->bahan_bakar,
                'description' => $req->description,
                'range_ori' => $req->range_ori,
                'conditions' => $req->conditions,
                'locations' => $req->city,
                'date_in' => mktime(12, 0, 0, $tanggal[1], $tanggal[2], $tanggal[0]),
            ]);
        return back();
    }
    public function deleteInProduct($id, Request $request)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();
        Alert::success('Data Berhasil Dihapus', 'Data Product Berhasil Dihapus');
        return back();
    }
    public function outProduct(Request $request)
    {

        if($request->dari != "" && $request->sampai != ""){
            $outProducts = DB::table('products')
                ->where('range_sold', '!=', null)
                ->whereBetween('date_out', [$request->dari, $request->sampai])
                ->orderBy('date_out', 'DESC')
                ->get();
        }else if($request->dari != ""){
            $outProducts = DB::table('products')
                ->where('range_sold', '!=', null)
                ->whereBetween('date_out', [$request->dari, date('Y-m-d')])
                ->orderBy('date_out', 'DESC')
                ->get();
        }else{
            $outProducts = DB::table('products')
                ->where('range_sold', '!=', null)
                ->orderBy('date_out', 'DESC')
                ->get();
        }


        return view('admin.out-product', compact('outProducts'));
    }

    public function outProduct_cetak(Request $request)
    {
        $gambar = base64_encode(file_get_contents(public_path('logo.png')));

        if($request->dari != "" && $request->sampai != ""){
            $products = DB::table('products')
                ->where('range_sold', '!=', null)
                ->whereBetween('date_out', [$request->dari, $request->sampai])
                ->orderBy('date_out', 'DESC')
                ->get();
            $periode = "Periode ".$request->dari." - ".$request->sampai;
        }else if($request->dari != ""){
            $products = DB::table('products')
                ->where('range_sold', '!=', null)
                ->whereBetween('date_out', [$request->dari, date('Y-m-d')])
                ->orderBy('date_out', 'DESC')
                ->get();
            $periode = "Periode ".$request->dari." - ".date('Y-m-d');
        }else{
            $products = DB::table('products')
                ->where('range_sold', '!=', null)
                ->orderBy('date_out', 'DESC')
                ->get();
            $periode = "Periode Semua Periode";
        }
        $totalKeuntungan = 0;
        $pdf = PDF::loadView('cetak-filter', compact('products', 'gambar', 'periode', 'totalKeuntungan'))->setPaper('a4', 'landscape');
        return $pdf->download('nota.pdf');
    }

    public function cetak_pdf()
    {
        $gambar = base64_encode(file_get_contents(public_path('logo.png')));

        $data = DB::table('products')
            ->select('*')
            ->get();
        $pdf = PDF::loadView('cetak', compact('data', 'gambar'));
        return $pdf->download('nota.pdf');
    }

    // public function outProduct() {
    //     // $inProducts = DB::table('products')
    //     //                 ->leftJoin('citys', 'products.locations', '=', 'citys.id')
    //     //                 ->where('range_sold', NULL)
    //     //                 ->get();
    //     $outProducts = DB::table('galery')->select('*')->get();
    //     $citys = DB::table('citys')->get();
    //     return view('admin.out-product', compact('outProducts', 'citys'));
    // }
    // public function detailOutProduct($id)
    // {
    //     $detailOutProduct = [
    //         'detail-out-Product' => DB::table('out_product')];
    //     return view('admin.detail-outproduct');
    // }

    public function city()
    {
        $citys = DB::table('citys')->get();
        return view('admin.city', compact('citys'));
    }
    public function createCity(Request $req)
    {
        DB::table('citys')->insert([
            'city' => $req->city,
        ]);
        return back();
    }
    public function updateCity(Request $req)
    {
        DB::table('citys')
            ->where('id', $req->id)
            ->update([
                'city' => $req->city,
            ]);
        return back();
    }
    public function deleteCity(Request $req)
    {
        DB::table('citys')
            ->where('id', $req->id)
            ->delete();
        DB::table('products')
            ->where('locations', $req->id)
            ->delete();
        return back();
    }
    public function galery()
    {
        $galerys = DB::table('galerys')->get();
        return view('admin.galery', compact('galerys'));
    }
    public function createGalery(Request $req)
    {
        $namaFile = strtoupper(md5(time())) . '.' . $req->image->getClientOriginalExtension();
        $folder = '../public/galery';
        $req->image->move($folder, $namaFile);
        DB::table('galerys')->insert([
            'file' => $namaFile,
        ]);
        return back();
    }
    public function deleteGalery(Request $req)
    {
        unlink('../public/galery/' . $req->image);
        DB::table('galerys')
            ->where('id', $req->id)
            ->delete();
        return back();
    }
}
