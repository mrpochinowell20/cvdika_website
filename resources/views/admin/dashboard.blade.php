@extends('admin.base')

@section('title')
Dashboard
@endsection

@push('style')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('main')
<div class="col-md-12">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Produk Masuk</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $produk_masuk }}</h3>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Produk Keluar</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $produk_keluar }}</h3>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Riwayat Produk</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $riwayat_produk }}</h3>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5>Pemasukkan</h5>
                </div>
                <div class="card-body">
                    <h3>
                        Rp {{ number_format($laba, 2, ',', '.') }}
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Data Merk Terlaris</h5>
                </div>
                <div class="card-body">
                    <div style="width: 100%; height: 300px; display: flex; justify-content: center; align-items: center;">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Data Penjualan</h5>
                </div>
                <div class="card-body">
                    <canvas id="top-products-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- <script>
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
</script> --}}
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            var topBrands = @json($topProducts);
            var brandCounts = @json($productCounts);

            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: topBrands,
                    datasets: [{
                        data: brandCounts,
                        backgroundColor: [
                            'rgb(255, 0, 0)',
                            'rgb(255, 153, 0)',
                            'rgb(0, 204, 0)',
                            'rgb(0, 102, 255)'
                        ],
                        borderColor: [
                            'rgb(255, 0, 0)',
                            'rgb(255, 153, 0)',
                            'rgb(0, 204, 0)',
                            'rgb(0, 102, 255)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true
                }
            });
        });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            var topProducts = @json($topProducts);
            var productCounts = @json($productCounts);

            var ctx = document.getElementById('top-products-chart').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: topProducts,
                    datasets: [{
                        label: 'Number of Products',
                        data: productCounts,
                        backgroundColor: [
                            'rgb(255, 0, 0)',
                            'rgb(255, 153, 0)',
                            'rgb(0, 204, 0)',
                            'rgb(0, 102, 255)'
                        ],
                        borderColor: [
                            'rgb(255, 0, 0)',
                            'rgb(255, 153, 0)',
                            'rgb(0, 204, 0)',
                            'rgb(0, 102, 255)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            stepSize: 1,
                            ticks: {
                                precision: 0
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });
</script>
@endpush
