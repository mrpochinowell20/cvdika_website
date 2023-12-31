@extends('admin.base')

@section('title')
    Produk Masuk
@endsection

@section('main')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row table-responsive ml-1">
                    <div class="table-responsive">
                        <div style="text-align: right" class="mb-3 pr-3">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#create">Tambah Produk</button>
                        </div>
                        <table id="multi-filter-select" class="display table table-striped table-hover" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Image</th>
                                    <th>Tahun</th>
                                    <th>Warna</th>
                                    <th>Transmisi</th>
                                    <th>Bahan Bakar</th>
                                    <th>Harga Beli</th>
                                    <th>Kondisi</th>
                                    <th>Kota</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1; ?>
                                @foreach ($inProducts as $product)
                                    <tr>
                                        <td>{{ $num++ }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->type }}</td>
                                        <td><img src="../image/{{ $product->image }}" width="100px"></td>
                                        <td>{{ $product->year }}</td>
                                        <td>{{ $product->colour }}</td>
                                        <td>{{ $product->transmisi }}</td>
                                        <td>{{ $product->bahan_bakar }}</td>
                                        <td>Rp.{{ number_format($product->range_ori, 2, ',', '.') }}</td>
                                        <td>{{ $product->conditions }}</td>
                                        <td>{{ $product->nama_kota }}</td>
                                        <td>{{ date('d/m/Y', $product->date_in) }}</td>
                                        <td>
                                            <button class="btn btn-md btn-success" data-toggle="modal"
                                                data-target="#detail_product_{{ $product->id }}">Detail</a>
                                                <button class="btn btn-md btn-info"
                                                    data-toggle="modal"data-target="#update{{ $product->id }}">Edit</button>
                                                {{-- <button class="btn btn-md btn-danger btn-delete" data-toggle="modal"data-target="#delete_product_{{ $product->id }}">Hapus</button> --}}
                                        </td>
                                        {{-- Modal Detail --}}
                                        <div class="modal fade" id="detail_product_{{ $product->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title" id="exampleModalLabel">
                                                            <{{ $product->name }}< /h1>
                                                                <h1 class="text-4xl font-bold text-white-900""><b>Detail
                                                                        Produk</b></h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <img src="/image/{{ $product->image }}"
                                                                            class="img-fluid">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h3><b>Nama Produk</b><br>{{ $product->name }}
                                                                            <h3><b>Tipe</b><br>{{ $product->type }}</h3>
                                                                            <h4><b>Tahun</b><br>{{ $product->year }}</h4>
                                                                            <h4><b>Warna</b><br>{{ $product->colour }}</h4>
                                                                            <h4><b>Transmisi</b><br>{{ $product->transmisi }}
                                                                            </h4>
                                                                            <h4><b>Bahan
                                                                                    Bakar</b><br>{{ $product->bahan_bakar }}
                                                                            </h4>
                                                                            <h5><b>Harga Beli</b><br>Rp.
                                                                                {{ $product->range_ori }}</h5>
                                                                            <p>
                                                                                <b>Deskripsi
                                                                                    Produk</b><br>{{ $product->description }}
                                                                            </p>
                                                                            <h4><b>Kondisi</b><br>{{ $product->conditions }}
                                                                            </h4>
                                                                            <h4><b>Kota</b><br>{{ $product->nama_kota }}
                                                                            </h4>
                                                                            <h4><b>Tanggal
                                                                                    Masuk</b><br>{{ date('d/m/Y', $product->date_in) }}
                                                                            </h4>
                                                                    </div>
                                                                    {{-- <footer id="footer" class="footer-area pt-60"> --}}
                                                                    <div class="container">
                                                                        <div class="whatsapp-area wow fadeIn"
                                                                            data-wow-duration="1s" data-wow-delay="0.5s">
                                                                            <div class="kolom-konten text-center">
                                                                                <div class="col-lg-12">
                                                                                    <div class="card">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal Update --}}
                                        <div class="modal fade" id="update{{ $product->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="update{{ $product->id }}Label"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('admin.update-in-product') }}" method="post">
                                                        @method('put')
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="update{{ $product->id }}Label">
                                                                Edit Produk</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id"
                                                                value="{{ $product->id }}">
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Nama" name="name"
                                                                value="{{ $product->name }}" required>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Tipe" name="type"
                                                                value="{{ $product->type }}" required>
                                                            <select name="year" class="form-control mb-2" required>
                                                                <option value="">Tahun</option>
                                                                <option value="1990"
                                                                    <?= $product->year == '1990' ? 'selected' : '' ?>>
                                                                    1990</option>
                                                                <option value="1991"
                                                                    <?= $product->year == '1991' ? 'selected' : '' ?>>
                                                                    1991</option>
                                                                <option value="1992"
                                                                    <?= $product->year == '1992' ? 'selected' : '' ?>>
                                                                    1992</option>
                                                                <option value="1993"
                                                                    <?= $product->year == '1993' ? 'selected' : '' ?>>
                                                                    1993</option>
                                                                <option value="1994"
                                                                    <?= $product->year == '1994' ? 'selected' : '' ?>>
                                                                    1994</option>
                                                                <option value="1995"
                                                                    <?= $product->year == '1995' ? 'selected' : '' ?>>
                                                                    1995</option>
                                                                <option value="1996"
                                                                    <?= $product->year == '1996' ? 'selected' : '' ?>>
                                                                    1996</option>
                                                                <option value="1997"
                                                                    <?= $product->year == '1997' ? 'selected' : '' ?>>
                                                                    1997</option>
                                                                <option value="1998"
                                                                    <?= $product->year == '1998' ? 'selected' : '' ?>>
                                                                    1998</option>
                                                                <option value="1999"
                                                                    <?= $product->year == '1999' ? 'selected' : '' ?>>
                                                                    1999</option>
                                                                <option value="2000"
                                                                    <?= $product->year == '2000' ? 'selected' : '' ?>>
                                                                    2000</option>
                                                                <option value="2001"
                                                                    <?= $product->year == '2001' ? 'selected' : '' ?>>
                                                                    2001</option>
                                                                <option value="2002"
                                                                    <?= $product->year == '2002' ? 'selected' : '' ?>>
                                                                    2002</option>
                                                                <option value="2003"
                                                                    <?= $product->year == '2003' ? 'selected' : '' ?>>
                                                                    2003</option>
                                                                <option value="2004"
                                                                    <?= $product->year == '2004' ? 'selected' : '' ?>>
                                                                    2004</option>
                                                                <option value="2005"
                                                                    <?= $product->year == '2005' ? 'selected' : '' ?>>
                                                                    2005</option>
                                                                <option value="2006"
                                                                    <?= $product->year == '2006' ? 'selected' : '' ?>>
                                                                    2006</option>
                                                                <option value="2007"
                                                                    <?= $product->year == '2007' ? 'selected' : '' ?>>
                                                                    2007</option>
                                                                <option value="2008"
                                                                    <?= $product->year == '2008' ? 'selected' : '' ?>>
                                                                    2008</option>
                                                                <option value="2009"
                                                                    <?= $product->year == '2009' ? 'selected' : '' ?>>
                                                                    2009</option>
                                                                <option value="2010"
                                                                    <?= $product->year == '2010' ? 'selected' : '' ?>>
                                                                    2010</option>
                                                                <option value="2011"
                                                                    <?= $product->year == '2011' ? 'selected' : '' ?>>
                                                                    2011</option>
                                                                <option value="2012"
                                                                    <?= $product->year == '2012' ? 'selected' : '' ?>>
                                                                    2012</option>
                                                                <option value="2013"
                                                                    <?= $product->year == '2013' ? 'selected' : '' ?>>
                                                                    2013</option>
                                                                <option value="2014"
                                                                    <?= $product->year == '2014' ? 'selected' : '' ?>>
                                                                    2014</option>
                                                                <option value="2015"
                                                                    <?= $product->year == '2015' ? 'selected' : '' ?>>
                                                                    2015</option>
                                                                <option value="2016"
                                                                    <?= $product->year == '2016' ? 'selected' : '' ?>>
                                                                    2016</option>
                                                                <option value="2017"
                                                                    <?= $product->year == '2017' ? 'selected' : '' ?>>
                                                                    2017</option>
                                                                <option value="2018"
                                                                    <?= $product->year == '2018' ? 'selected' : '' ?>>
                                                                    2018</option>
                                                                <option value="2019"
                                                                    <?= $product->year == '2019' ? 'selected' : '' ?>>
                                                                    2019</option>
                                                                <option value="2020"
                                                                    <?= $product->year == '2020' ? 'selected' : '' ?>>
                                                                    2020</option>
                                                                <option value="2021"
                                                                    <?= $product->year == '2021' ? 'selected' : '' ?>>
                                                                    2021</option>
                                                                <option value="2022"
                                                                    <?= $product->year == '2022' ? 'selected' : '' ?>>
                                                                    2022</option>
                                                                <option value="2023"
                                                                    <?= $product->year == '2023' ? 'selected' : '' ?>>
                                                                    2023</option>
                                                            </select>
                                                            <input type="text" class="form-control mb-2"
                                                                placeholder="Warna" name="colour"
                                                                value="{{ $product->colour }}" required>
                                                            <select name="transmisi" class="form-control mb-2" required>
                                                                <option value="">Transmisi</option>
                                                                <option value="Manual"
                                                                    <?= $product->transmisi == 'Manual' ? 'selected' : '' ?>>
                                                                    Manual</option>
                                                                <option value="Automatic"
                                                                    <?= $product->transmisi == 'Automatic' ? 'selected' : '' ?>>
                                                                    Automatic</option>
                                                                <option value="Tiptonic"
                                                                    <?= $product->transmisi == 'Triptonic' ? 'selected' : '' ?>>
                                                                    Triptonic</option>
                                                            </select>
                                                            <select name="bahan_bakar" class="form-control mb-2" required>
                                                                <option value="">Bahan Bakar</option>
                                                                <option value="Pertalite"
                                                                    <?= $product->bahan_bakar == 'Pertalite' ? 'selected' : '' ?>>
                                                                    Pertalite</option>
                                                                <option value="Pertamax"
                                                                    <?= $product->bahan_bakar == 'Pertamax' ? 'selected' : '' ?>>
                                                                    Pertamax</option>
                                                                <option value="Pertamina Dex"
                                                                    <?= $product->bahan_bakar == 'Pertamina Dex' ? 'selected' : '' ?>>
                                                                    Pertamina Dex</option>
                                                                <option value="Dexlite"
                                                                    <?= $product->bahan_bakar == 'Dexlite' ? 'selected' : '' ?>>
                                                                    Dexlite</option>
                                                                <option value="Solar"
                                                                    <?= $product->bahan_bakar == 'Solar' ? 'selected' : '' ?>>
                                                                    Solar</option>
                                                            </select>
                                                            <textarea name="description" class="form-control mb-2" placeholder="Deskripsi" rows="2" required>{{ $product->description }}</textarea>
                                                            <input type="number" class="form-control mb-2"
                                                                placeholder="Harga Beli" name="range_ori"
                                                                value="{{ $product->range_ori }}" required>
                                                            <select name="conditions" class="form-control mb-2" required>
                                                                <option value="">Kondisi</option>
                                                                <option value="Baru"
                                                                    <?= $product->conditions == 'Baru' ? 'selected' : '' ?>>
                                                                    Baru</option>
                                                                <option value="Bekas"
                                                                    <?= $product->conditions == 'Bekas' ? 'selected' : '' ?>>
                                                                    Bekas</option>
                                                            </select>
                                                            <select name="city" class="form-control mb-2" required>
                                                                @foreach ($citys as $city)
                                                                    <option value="{{ $city->id }}"
                                                                        <?= $product->locations == $city->city ? 'selected' : '' ?>>
                                                                        {{ $city->city }}</option>
                                                                @endforeach
                                                            </select>
                                                            <input type="date" class="form-control mb-2"
                                                                placeholder="Tanggal Masuk" name="date_in"
                                                                value="{{ date('Y-m-d', $product->date_in) }}" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal Delete --}}
                                        <div class="modal fade" id="delete_product_{{ $product->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Produk
                                                            {{ $product->name }}?</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Anda Akan Melakukan Penghapusan Data {{ $product->name }}.
                                                        <b>Data Akan Terhapus Secara Permanen.</b> Apakah Anda Setuju
                                                        Untuk Melakukan Hapus Data?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-success"
                                                            data-dismiss="modal">Batal</button>
                                                        <a href="in-product/{{ $product->id }}" type="button"
                                                            class="btn btn-danger">
                                                            Hapus Data
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Tambah Produk --}}
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.create-in-product') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createLabel">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control mb-2" placeholder="Nama" name="name" required>
                        <input type="text" class="form-control mb-2" placeholder="Tipe" name="type" required>
                        <input type="file" class="form-control mb-2" placeholder="Image" name="image" required>
                        <select name="year" class="form-control mb-2" required>
                            <option value="">Tahun</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <input type="text" class="form-control mb-2" placeholder="Warna" name="colour" required>
                        <select name="transmisi" class="form-control mb-2" required>
                            <option value="">Transmisi</option>
                            <option value="Manual">Manual</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Triptonic">Triptonic</option>
                        </select>
                        <select name="transmisi" class="form-control mb-2" required>
                            <option value="">Bahan Bakar</option>
                            <option value="Pertalite">Pertalite</option>
                            <option value="Pertamax">Pertamax</option>
                            <option value="Permina Dex">Permina Dex</option>
                            <option value="Dexlite">Dexlite</option>
                            <option value="Solar">Solar</option>
                        </select>
                        <textarea name="description" class="form-control mb-2" placeholder="Deskripsi" rows="2" required></textarea>
                        <input type="number" class="form-control mb-2" placeholder="Harga Beli" name="range_ori"
                            required>
                        <select name="conditions" class="form-control mb-2" required>
                            <option value="">Kondisi</option>
                            <option value="Baru">Baru</option>
                            <option value="Bekas">Bekas</option>
                        </select>
                        <select name="city" class="form-control mb-2" required>
                            <option value="">Kota</option>
                            @foreach ($citys as $city)
                                <option value="{{ $city->id }}">{{ $city->city }}</option>
                            @endforeach
                        </select>
                        <input type="date" class="form-control mb-2" placeholder="Tanggal Masuk" name="date_in"
                            required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });
                    column.data().unique().sort().each(function(d, j) {
                        select.append('' + d + '')
                    });
                });
            }
        });
    </script>
@endsection
