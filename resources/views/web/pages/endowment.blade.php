@extends('web.layout.app')

@section('title', $page->name)

@section('banner')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay"
            style="background-image:url({{ url('web-assets/assets/img/header-1.jpg') }});background-position:center bottom;"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row pt-6" data-inertia='{"weight":1.5}'>
                <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>{{ $page->name }}</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page->name }}</li>
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
            <div class="row">
                <div class="col-12">
                    <div class="bg-white px-3 px-0 rounded-3">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
