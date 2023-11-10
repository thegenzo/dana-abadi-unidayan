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
        <div class="bg-holder" style="background-image:url({{ url('web-assets/assets/img/header-5.jpg') }});"></div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
                <div class="col-sm-8 col-lg-7">
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
                                    Rp.54.221.241.467,00
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
                    <h3 class="fs-2 fs-lg-3">Welcome to the Elixir</h3>
                    <p class="px-lg-4 mt-3">Get expert consultancy and support with Elixir, an advisory firm that
                        stand by your side always.</p>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
            </div>
            <div class="row mt-4 mt-md-5">
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-chart-bar"></span></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Business Consulting</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Solution for every business related
                        problems, readily <br /> and skillfully.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-bell"></span>
                    </div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Risk Management</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Calculate every possible risk in your
                        business, take <br /> control over them.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="far fa-lightbulb"></span></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Market Research</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Know the market before taking any
                        step, reduce <br /> risks before you go.</p>
                </div>
                <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div>
                    <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Quality Services</h5>
                    <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Experience unparalleled service, from
                        beginning <br /> to final construction.</p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-0">
        <div class="container">
            <div class="row flex-center text-center pb-6">
                <div class="col-12">
                    <div class="position-relative mt-4 py-5 py-md-11">
                        <div class="bg-holder rounded-3"
                            style="background-image:url({{ url('web-assets/assets/img/video-screenshot-2.jpg') }});"></div>
                        <!--/.bg-holder-->
                        <button class="btn-elixir-play" data-bigpicture="{&quot;ytSrc&quot;:&quot;jlWMTNZNOc0&quot;}"
                            data-zanim-trigger="scroll"
                            data-zanim-xs='{"from":{"opacity":0,"scale":0.8},"to":{"opacity":1,"scale":1},"duration":1}'><span
                                class="fas fa-play fs-1"></span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-users"></span>Awesome
                        Team</h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>Before talking destination, we
                        shine a spotlight across your organization <br /> to fully understand it.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-comments"></span>Excellent
                        Support</h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>If you face any trouble, you can
                        always let our dedicated support team help you. They are ready for you 24/7.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-bolt"></span>Faster
                        Performance</h5>
                    <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>We develop a systematic
                        well-ordered process of analysis, from concept through implementation.</p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Our Services</h3>
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
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>As one of the world’s largest
                                    accountancy networks, elixir helps a diverse range of clients with a diverse
                                    range of needs.This is especially true of our Advisory Practice, which provides
                                    corporate finance and transaction services, business restructuring.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                        href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                class="d-inline-block"
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
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>Elixir serves clients across the
                                    country and around the world as they navigate an increasingly complex tax
                                    landscape. Our tax professionals draw on deep experience and industry-specific
                                    knowledge to deliver clients the insights and innovation they need.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                        href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                class="d-inline-block"
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
                                <p class="mt-3" data-zanim-xs='{"delay":0.1}'>To help you understand what this
                                    road looks like, we surveyed 1165 digital marketers across Europe and North
                                    America to explore current trends and priorities in digital marketing.</p>
                            </div>
                            <div class="overflow-hidden">
                                <div data-zanim-xs='{"delay":0.2}'><a class="d-flex align-items-center"
                                        href="#!">Learn More<div class="overflow-hidden ms-2"><span
                                                class="d-inline-block"
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
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Apply for special financial
                        support and earn exclusive rewards.</p>
                </div>
                <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-comment-alt"></span>Chat
                        with team</h5>
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Have a question? Chat online
                        with an expert. <a href='#!'>Start chatting <span
                                class='fas fa-external-link-alt ms-1'></span></a></p>
                </div>
                <div class="col-sm-6 col-lg-4 px-4 px-sm-3 mb-4 mb-lg-0" data-zanim-timeline="{}"
                    data-zanim-trigger="scroll">
                    <h5 data-zanim-xs='{"delay":0}'><span class="text-primary fs-0 me-3 fas fa-phone-alt"></span>Call a
                        specialist</h5>
                    <p class="mt-3 pe-3 pe-lg-5 mb-0" data-zanim-xs='{"delay":0.1}'>Our 24/7 support team is ready
                        for you at 1-800-MY-Elixir.</p>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="container">
            <div class="text-center mb-7">
                <h3 class="fs-2 fs-md-3">Why Choose Elixir</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row">
                <div class="col-lg-6 pe-lg-3"><img class="rounded-3 img-fluid" src="{{ asset('web-assets/assets/img/why-choose-us.jpg') }}"
                        alt="about" /></div>
                <div class="col-lg-6 px-lg-5 mt-6 mt-lg-0" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-comment-dots fs-1 me-2"
                                    data-fa-transform="flip-h"></span>We Are Professional</h5>
                            <p class="mt-3">We resource, train, speak, mentor and encourage; marketplace leaders,
                                business owners and career professionals to be effective in the workplace.</p>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-palette fs-1 me-2"
                                    data-fa-transform="shrink-1"></span>We Are Creative</h5>
                            <p class="mt-3">With so many factors to consider when deciding how to characterize
                                your company , wouldn’t it be great to have a group of forward-thinking,
                                well-informed individuals on board who know what they’re doing?</p>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                            <h5 class="fs-0 fs-lg-1"><span class="fas fa-stopwatch fs-1 me-2"
                                    data-fa-transform="grow-1"></span>24/7 Great Support</h5>
                            <p class="mt-3">Design clever and compelling marketing strategies, improve product
                                positioning, and drive conversion rates, Elixir is all time available to guide you.
                            </p>
                        </div>
                    </div>
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
                        href="https://prium.github.io/elixir/v3.0.0/contact.html">Contact Us</a></div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="text-center">
        <div class="container">
            <div class="text-center">
                <h3 class="fs-2 fs-md-3">Things You Get</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/sharing.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses,
                                and tell brand and product stories in a most creative way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/mail.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creating Experiences</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative
                                platforms and digital projects with one purpose: to create experiences.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/target.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines
                                that generate new products with higher potential and lower risk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/world-globe.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and
                                environmentally conservative solutions to our clients to boost their business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/money.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and
                                real, relevant research, we create prototypes, not presentations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="px-3 py-4 px-lg-4">
                        <div class="overflow-hidden"><img src="{{ asset('web-assets/assets/img/icons/data-analytics.png')}}" alt="icon"
                                height="37" data-zanim-xs='{"delay":0}' /></div>
                        <div class="overflow-hidden">
                            <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give
                                our clienrts hard hitting answers and focus hard on best opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-primary">
        <div class="container">
            <div class="row align-items-center text-white">
                <div class="col-lg-4">
                    <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}"
                        data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                        </div>
                        <div class="overflow-hidden">
                            <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak
                                to one of our financial advisers over the phone? Just submit your details and we’ll
                                be in touch shortly. You can also email us if you would prefer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
                    <h5 class="text-white">I would like to discuss:</h5>
                    <form class="mt-4" method="post">
                        <div class="row">
                            <div class="col-6"><input class="form-control" type="hidden" name="to"
                                    value="username@domain.extension" /><input class="form-control" type="text"
                                    placeholder="Your Name" aria-label="Your Name" /></div>
                            <div class="col-6"><input class="form-control" type="text" placeholder="Phone Number"
                                    aria-label="Phone Number" /></div>
                            <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Subject"
                                    aria-label="Subject" /></div>
                            <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100 text-center">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Global leadership</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4    ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-3.jpg') }}"
                            alt="Reenal Scott" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Reenal Scott</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Advertising
                                    Consultant</h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Reenal Scott is the Founder and
                                    CEO of Elixir, which he started from his dorm room in 2013 with 3 people only.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0  ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-4.jpg') }}"
                            alt="Lily Anderson" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Lily Anderson</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Activation Consultant
                                </h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Lily leads Elixir UK and
                                    oversees the company’s Customer Operations teams supporting millions ofr users.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4  mt-lg-0 ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-5.jpg') }}"
                            alt="Thomas Anderson" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Thomas Anderson</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Change Management
                                    Consultant</h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As the VP of People, Thomas’s
                                    focus lies in the development and optimization of talent retention.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-6.jpg') }}"
                            alt="Legartha Mantana" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Legartha Mantana</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Brand Management
                                    Consultant</h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>As General Counsel of Elixir,
                                    Tony oversees global legal activities and policies across all aspects.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-7.jpg') }}"
                            alt="John Snow" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>John Snow</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Analyst</h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>John has overseen the meteoric
                                    growth while protecting scaling its uniquely creative and culture.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mt-4   ">
                    <div class="card h-100"><img class="card-img-top" src="{{ asset('web-assets/assets/img/portrait-1.jpg') }}"
                            alt="Ragner Lothbrok" />
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <h5 data-zanim-xs='{"delay":0}'>Ragner Lothbrok</h5>
                            </div>
                            <div class="overflow-hidden">
                                <h6 class="fw-normal text-500" data-zanim-xs='{"delay":0.1}'>Business Consultant
                                </h6>
                            </div>
                            <div class="overflow-hidden">
                                <p class="py-3 mb-0" data-zanim-xs='{"delay":0.2}'>Ragner, SVP of Engineering,
                                    oversees Elixir’s vast engineering organization which drives the core
                                    programming.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
        <div class="bg-holder overlay overlay-elixir" style="background-image:url({{ url('web-assets/assets/img/background-15.jpg') }});">
        </div>
        <!--/.bg-holder-->
        <div class="container">
            <div class="d-flex"><span class="me-3"> <img src="{{ asset('web-assets/assets/img/checkmark.png') }}" alt="checkmark"
                        style="width: 55px" /></span>
                <div class="flex-1">
                    <h2 class="text-warning fs-3 fs-lg-4">Take the right step,<br /><span class="text-white">do
                            the big things.</span></h2>
                    <div class="row mt-4 pe-lg-10">
                        <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":52}'>52</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Cases Solved</h6>
                        </div>
                        <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":164}'>164</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Trained Experts</h6>
                        </div>
                        <div class="w-100 d-flex d-lg-none"></div>
                        <div class="overflow-hidden col-md-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":38}'>38</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Branches</h6>
                        </div>
                        <div class="overflow-hidden col col-lg-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="fs-3 fs-lg-4 mb-0 fw-bold text-white mt-lg-5 mt-3 lh-xs"
                                data-zanim-xs='{"delay":0.1}' data-countup='{"endValue":100}'>100</div>
                            <h6 class="fs-0 text-white" data-zanim-xs='{"delay":0.2}'>Satisfied Clients</h6>
                        </div>
                    </div>
                </div>
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
                                <p class="lead">Their work on our website and Internet marketing has made a
                                    significant different to our business. We’ve seen a 425% increase in quote
                                    requests from the website which has been pretty remarkable – but I’d always like
                                    to see more!</p>
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
                                <p class="lead">Writing case studies was a daunting task for us. We didn’t know
                                    where to begin or what questions to ask, and clients never seemed to follow
                                    through when we asked. Elixir team did everything – with almost no time or
                                    effort for me!</p>
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
                                    consultant to optimize our sales emails, but Elixir was highly recommended by
                                    many other Y-Combinator startups we knew. Elixir helped us run a ~6 week email
                                    campaign.</p>
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

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="text-center mb-6">
                <h3 class="fs-2 fs-md-3">Latest News</h3>
                <hr class="short"
                    data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html"><img
                                class="card-img-top" src="{{ asset('web-assets/assets/img/9.jpg') }}" alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>Tax impacts of lease mean accounting change
                                    </h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Paul O'Sullivan</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>HMRC released a consultation
                                    document to flag some potential tax impacts that a forthcoming change...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center"
                                        href="https://prium.github.io/elixir/v3.0.0/news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html"><img
                                class="card-img-top" src="{{ asset('web-assets/assets/img/10.jpg') }}" alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>What brexit means for data protection law</h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Enrico Ambrosi</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Assuming that the referendum is
                                    not ignored completely, there are two possible futures for the UK...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center"
                                        href="https://prium.github.io/elixir/v3.0.0/news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html"><img
                                class="card-img-top" src="{{ asset('web-assets/assets/img/11.jpg') }}" alt="Featured Image" /></a>
                        <div class="card-body" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden"><a href="https://prium.github.io/elixir/v3.0.0/news/news.html">
                                    <h5 data-zanim-xs='{"delay":0}'>The growing meanace of social engineering fraud
                                    </h5>
                                </a></div>
                            <div class="overflow-hidden">
                                <p class="text-500" data-zanim-xs='{"delay":0.1}'>By Robson</p>
                            </div>
                            <div class="overflow-hidden">
                                <p class="mt-3" data-zanim-xs='{"delay":0.2}'>Social engineering involves the
                                    collection of information from various sources about a target...</p>
                            </div>
                            <div class="overflow-hidden">
                                <div class="d-inline-block" data-zanim-xs='{"delay":0.3}'><a
                                        class="d-flex align-items-center"
                                        href="https://prium.github.io/elixir/v3.0.0/news/news.html">Learn More<div
                                            class="overflow-hidden ms-2"
                                            data-zanim-xs='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                            <span class="d-inline-block fw-medium">&xrarr;</span>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
