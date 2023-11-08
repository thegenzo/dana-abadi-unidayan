@extends('web.layout.app')

@section('title', 'Cara Donasi')

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
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Cara Donasi</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cara Donasi</li>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{ asset('web-assets/assets/img/why-choose-us.jpg') }}"
                        alt="about" /></div>
                <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2"
                                    data-fa-transform="flip-h"></span>We Are Professional</h5>
                            <p class="mt-3">We resource, train, speak, mentor and encourage; marketplace leaders, business
                                owners and career professionals to be effective in the workplace.</p>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2"
                                    data-fa-transform="shrink-1"></span>We Are Creative</h5>
                            <p class="mt-3">With so many factors to consider when deciding how to characterize your
                                company , wouldn’t it be great to have a group of forward-thinking, well-informed
                                individuals on board who know what they’re doing?</p>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-stopwatch fs-1 me-2"
                                    data-fa-transform="grow-1"></span>24/7 Great Support</h5>
                            <p class="mt-3">Design clever and compelling marketing strategies, improve product
                                positioning, and drive conversion rates, Elixir is all time available to guide you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="text-center mb-7">
                <h3 class="fs-2 fs-md-3">Industries</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row g-0 position-relative mb-4 mb-lg-0">
                <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                    <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  "
                        style="background-image:url({{ url('web-assets/assets/img/6.jpg') }});"></div>
                    <!--/.bg-holder-->
                </div>
                <div
                    class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg rounded-lg-be-0 rounded-lg-te-lg ">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100">
                        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Business Consulting</h5>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>As one of the world’s largest accountancy
                                    networks, elixir helps a diverse range of clients with a diverse range of needs.This is
                                    especially true of our Advisory Practice, which provides corporate finance and
                                    transaction services, business restructuring.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn
                                        More<div class="overflow-hidden ms-2"><span class="d-inline-block"
                                                data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 position-relative mb-4 mb-lg-0">
                <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative order-lg-2" style="min-height:400px;">
                    <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0  rounded-lg-ts-0"
                        style="background-image:url({{ url('web-assets/assets/img/7.jpg') }});"></div>
                    <!--/.bg-holder-->
                </div>
                <div
                    class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  rounded-lg-be-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100">
                        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Tax consulting</h5>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Elixir serves clients across the country and
                                    around the world as they navigate an increasingly complex tax landscape. Our tax
                                    professionals draw on deep experience and industry-specific knowledge to deliver clients
                                    the insights and innovation they need.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn
                                        More<div class="overflow-hidden ms-2"><span class="d-inline-block"
                                                data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 position-relative mb-4 mb-lg-0">
                <div class="col-lg-6 py-3 py-lg-0 mb-0 position-relative" style="min-height:400px;">
                    <div class="bg-holder rounded-ts-lg rounded-te-lg rounded-lg-te-0 rounded-lg-ts-0 rounded-bs-0 rounded-lg-bs-lg "
                        style="background-image:url({{ url('web-assets/assets/img/8.jpg') }});"></div>
                    <!--/.bg-holder-->
                </div>
                <div class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 bg-white rounded-bs-lg rounded-lg-bs-0 rounded-be-lg  ">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="d-flex align-items-center h-100">
                        <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Advisory</h5>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>To help you understand what this road looks
                                    like, we surveyed 1165 digital marketers across Europe and North America to explore
                                    current trends and priorities in digital marketing.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center" href="#!">Learn
                                        More<div class="overflow-hidden ms-2"><span class="d-inline-block"
                                                data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-7">
                <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 far fa-credit-card"></span>Special
                        financing</h5>
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Apply for special financial support
                        and earn exclusive rewards.</p>
                </div>
                <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-comment-alt"></span>Chat
                        with team</h5>
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Have a question? Chat online with an
                        expert. <a href='#!'>Start chatting <span class='fas fa-external-link-alt ms-1'></span></a>
                    </p>
                </div>
                <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-phone-alt"></span>Call a
                        specialist</h5>
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Our 24/7 support team is ready for you
                        at 1-800-MY-Elixir.</p>
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
                    <h4 class="text-white mb-0">If you have any query related investment... <br class="d-md-none" />we are
                        available 24/7</h4>
                </div>
                <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill"
                        href="../contact.html">Contact Us</a></div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-white">
        <div class="container">
            <div class="swiper theme-slider" data-swiper='{"loop":true,"slidesPerView":1,"autoplay":{"delay":5000}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row px-lg-8">
                            <div class="col-4 col-md-3 mx-auto"><img class="rounded-3 mx-auto img-fluid"
                                    src="{{ asset('web-assets/assets/img/client1.png') }}" alt="Member" /></div>
                            <div class="col-md-9 mt-4 mt-md-0 px-4 px-sm-3">
                                <p class="lead">Their work on our website and Internet marketing has made a significant
                                    different to our business. We’ve seen a 425% increase in quote requests from the website
                                    which has been pretty remarkable – but I’d always like to see more!</p>
                                <h6 class="fs-0 mb-1 mt-4">Michael Clarke</h6>
                                <p class="mb-0 text-500">CEO, A.E.T Institute</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row px-lg-8">
                            <div class="col-4 col-md-3 mx-auto"><img class="rounded-3 mx-auto img-fluid"
                                    src="{{ asset('web-assets/assets/img/client2.png') }}" alt="Member" /></div>
                            <div class="col-md-9 mt-4 mt-md-0 px-4 px-sm-3">
                                <p class="lead">Writing case studies was a daunting task for us. We didn’t know where to
                                    begin or what questions to ask, and clients never seemed to follow through when we
                                    asked. Elixir team did everything – with almost no time or effort for me!</p>
                                <h6 class="fs-0 mb-1 mt-4">Maria Sharapova</h6>
                                <p class="mb-0 text-500">Managing Director, Themewagon Inc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row px-lg-8">
                            <div class="col-4 col-md-3 mx-auto"><img class="rounded-3 mx-auto img-fluid"
                                    src="{{ asset('web-assets/assets/img/client3.png') }}" alt="Member" /></div>
                            <div class="col-md-9 mt-4 mt-md-0 px-4 px-sm-3">
                                <p class="lead">As a sales gamification company, we were skeptical to work with a
                                    consultant to optimize our sales emails, but Elixir was highly recommended by many other
                                    Y-Combinator startups we knew. Elixir helped us run a ~6 week email campaign.</p>
                                <h6 class="fs-0 mb-1 mt-4">David Beckham</h6>
                                <p class="mb-0 text-500">Chairman, Harmony Corporation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev icon-item icon-item-lg"><span class="fas fa-chevron-left fs--2"></span>
                    </div>
                    <div class="swiper-button-next icon-item icon-item-lg"><span
                            class="fas fa-chevron-right fs--2"></span></div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

    <div class="bg-200 py-6">
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
    </div>
@endsection
