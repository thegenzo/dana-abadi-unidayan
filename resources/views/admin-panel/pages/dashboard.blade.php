@extends('admin-panel.layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="owl-carousel counter-carousel owl-theme">
            <div class="item">
                <div class="card border-0 zoom-in bg-light-primary shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-user-male.svg"
                                width="50" height="50" class="mb-1" alt="" />
                            <p class="fw-semibold fs-3 text-primary mb-1"> Total Admin </p>
                            <h5 class="fw-semibold text-primary mb-0">{{ $admin }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-warning shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-briefcase.svg"
                                width="50" height="50" class="mb-1" alt="" />
                            <p class="fw-semibold fs-3 text-warning mb-1">Total User</p>
                            <h5 class="fw-semibold text-warning mb-0">{{ $user }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card border-0 zoom-in bg-light-info shadow-none">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-mailbox.svg"
                                width="50" height="50" class="mb-1" alt="" />
                            <p class="fw-semibold fs-3 text-info mb-1">Berita </p>
                            <h5 class="fw-semibold text-info mb-0">{{ $news }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Grafik total sumbangan ({{ $year }})</h3>
                <form method="GET" action="{{ route('admin-panel.dashboard') }}">
                    <label for="year">Pilih Tahun:</label>
                    <select id="year" name="year">
                        @for ($i = date('Y'); $i >= 2023; $i--)
                            <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                    </select>
                    <button type="submit">Submit</button>
                </form>
                <canvas id="donationsChart" width="400" height="100"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <!--  current page js files -->
    <script src="{{ asset('panel-assets/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('panel-assets/dist/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('donationsChart').getContext('2d');
            var monthlyDonations = @json(array_values($monthlyDonations));
            
            var donationsChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December'],
                    datasets: [{
                        label: 'Total Donasi',
                        data: monthlyDonations,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: false,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
@endpush
