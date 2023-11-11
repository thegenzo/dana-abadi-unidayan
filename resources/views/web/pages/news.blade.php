@extends('web.layout.app')

@section('title', 'Berita')

@section('banner')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay" style="background-image:url({{ url('web-assets/assets/img/header-1.jpg') }});background-position:center bottom;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
                <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Berita</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Berita</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="row g-4">
                @forelse ($latestNews as $news)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <a href="{{ route('web.news-detail', $news->id) }}"><img class="card-img-top" src="{{ asset($news->cover_image) }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="{{ route('web.news-detail', $news->id)}}">
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
                                    <a class="d-flex align-items-center" href="{{ route('web.news-detail', $news->id) }}">
                                        Baca Selengkapnya
                                        <div class="overflow-hidden ms-2" data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
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
                {{ $latestNews->links() }}
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
