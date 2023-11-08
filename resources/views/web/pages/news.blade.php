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
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/9.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>Tax impacts of lease mean accounting change</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Paul O'Sullivan</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>HMRC released a consultation document to
                                    flag some potential tax impacts that a forthcoming change...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/10.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>What brexit means for data protection law</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Enrico Ambrosi</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Assuming that the referendum is not ignored
                                    completely, there are two possible futures for the UK...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/11.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>The growing meanace of social engineering fraud</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Robson</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Social engineering involves the collection
                                    of information from various sources about a target...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/9.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>Tax impacts of lease accounting change</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Paul O'Sullivan</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>It is a word that has become used as a
                                    shorthand way of saying the UK leaving the EU - merging...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/10.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>What brexit means for data protection law</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Enrico Ambrosi</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>England voted for Brexit, by 53.4% to
                                    46.6%. Wales also voted for Brexit, with Leave getting...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="../news/news.html"><img class="card-img-top" src="{{ asset('web-assets/assets/img/11.jpg') }}"
                                alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="../news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>The growing meanace of social engineering fraud</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Robson</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Theresa May was against Brexit during the
                                    referendum campaign but is now in favour of it because...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center" href="../news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-auto mx-auto mt-4">
                    <nav class="mt-5" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link lh-sm" href="#" aria-label="Previous"><span
                                        aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item"><a class="page-link lh-sm" href="#!">1</a></li>
                            <li class="page-item active"><a class="page-link lh-sm" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link lh-sm" href="#!">3</a></li>
                            <li class="page-item"><a class="page-link lh-sm" href="#!">4</a></li>
                            <li class="page-item"><a class="page-link lh-sm" href="#!" aria-label="Next"><span
                                        aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
