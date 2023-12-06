@extends('web.layout.app')

@section('title', 'Beranda')

@push('addon-style')
    <style>
        .sum-text {
            color: var(--elixir-headings-color);
        }

        .summary-details {
            display: flex;
            flex-direction: row;
        }

        .summary-details .sum-text {
            display: flex;
            flex-direction: column;
            padding: 0px 10px;
        }
    </style>
@endpush

@section('content')

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
        <div class="bg-holder" style="background-image:url({{ url('web-assets/home.jpg') }});"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                <div class="col-lg-6 col-md-12 col-sm-12" style="padding: 20px; background: rgba(255, 255, 255, 0.6);"
                    data-zanim-xs='{"delay":0.4}'>
                    <div class="overflow-hidden">
                        <h1 class="fs-4 fs-md-5" data-zanim-xs='{"delay":0.5}'>Dana Abadi UNIDAYAN</h1>
                    </div>
                    <div class="overflow-hidden">
                        <div class="summary-details mt-5" data-zanim-xs='{"delay":0.6}'>
                            <div class="sum-icon">
                                <img src="{{ asset('web-assets/assets/img/fund.png') }}" width="80px">
                            </div>

                            <div class="sum-text">
                                <h4 class="title">Total Donasi Terkumpul</h4>
                                <h5 class="count">
                                    Rp. {{ number_format($donationTotal) }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div data-zanim-xs='{"delay":0.7}'>
                            <a class="btn btn-warning mt-3" href="{{ route('web.donate') }}">
                                Donasi Sekarang<span lass="fas fa-chevron-right ms-2"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-white text-center">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-10 col-md-6">
                    <h3 class="fs-2 fs-lg-3">Selamat Datang di <br>Dana Abadi UNIDAYAN</h3>
                    <p class="px-lg-4 mt-3">
                        Dengan menyumbang, anda telah berkontribusi pada UNIDAYAN di ranah:
                    </p>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
            </div>
            <div class="row mt-4 mt-md-5">
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Pendapatan Alternatif</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>
                        Sebagai penunjang tenaga didik di UNIDAYAN
                    </p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><i class="fas fa-user-graduate"></i></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Beasiswa</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Baik untuk mahasiswa berprestasi maupun bagi
                        yang kurang mampu</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><i class="fas fa-building"></i></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Pembangunan</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>
                        Untuk peningkatan sarana dan prasarana kuliah
                    </p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><i class="fas fa-flask"></i></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Penelitian</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>
                        Melakukan riset yang bermanfaat bagi masyarakat
                    </p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-primary py-6 text-center text-md-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md">
                    <h4 class="text-white mb-0">Jika anda ingin mengenal lebih jauh tentang UNIDAYAN, <br
                            class="d-md-none" />silahkan mengunjungi situs resmi kami</h4>
                </div>
                <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="https://unidayan.ac.id"
                        target="_blank">Situs Resmi Kami</a></div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    {{-- <div class="bg-200 py-6">
        <div class="container">
            <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo2.png') }}" alt="partnerco" data-zanim-xs="{}" /></div>
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo1.png') }}" alt="tvc" data-zanim-xs="{}" /></div>
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo6.png') }}" alt="arcade" data-zanim-xs="{}" /></div>
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo3.png') }}" alt="bearbrand" data-zanim-xs="{}" /></div>
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo5.png') }}" alt="fast brothers" data-zanim-xs="{}" /></div>
                <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid"
                        src="{{ asset('web-assets/assets/img/partner/logo4.png') }}" alt="harculis beards" data-zanim-xs="{}" /></div>
            </div>
        </div>
    </div> --}}

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Berita Terbaru</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row g-4">
                @forelse (\App\Models\News::latest()->take(3) as $news)
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <a href="{{ route('web.news-detail', $news->id) }}"><img class="card-img-top"
                                    src="{{ asset($news->cover_image) }}" alt="Featured Image" /></a>
                            <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden"><a href="{{ route('web.news-detail', $news->id) }}">
                                        <h5 data-zanim-xs='{"delay":0}'>{{ $news->title }}</h5>
                                    </a></div>
                                <div class="overflow-hidden">
                                    <p class="text-500" data-zanim-xs='{"delay":0.1}'>Oleh {{ $news->user->name }}</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim-xs='{"delay":0.2}'>{!! Str::limit($news->content, 50, '(...)') !!}</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'>
                                        <a class="d-flex align-items-center"
                                            href="{{ route('web.news-detail', $news->id) }}">
                                            Baca Selengkapnya
                                            <div class="overflow-hidden ms-2"
                                                data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block fw-medium">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12 col-md-12">
                        <h2 class="text-center">Tidak ada berita terkini</h2>
                    </div>
                @endforelse
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
