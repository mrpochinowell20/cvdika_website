@extends('admin.base')

@section('title')
    Detail Transaksi
@endsection

@section('content')
<div>
    <div class = "row">
      <div class = "col-md-12">
        <h1>Detail Data<h1>
      </div>
      <div class="col-md-12">
        <div class="container-fluid bg-white p-4">
          <div class="mb-4">
            <table>
                <tr>
                    <th width="100px">Nama Produk</th>
                    <th width="30px">:</th>
                    <th>{{$product->name}}</th>
                </tr>
                <tr>
                    <th width="50px">Tipe</th>
                    <th width="30px">:</th>
                    <th>{{$product->type}}</th>
                </tr>
            </table>


@endsection
