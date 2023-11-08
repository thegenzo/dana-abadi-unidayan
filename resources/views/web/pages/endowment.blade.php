@extends('web.layout.app')

@section('title', 'Dana Abadi')

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
                        <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Dana Abadi</h1>
                        <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                            <ol class="breadcrumb fs-1 ps-0 fw-bold">
                                <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dana Abadi</li>
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
            <div class="row mt-6">
                <div class="col">
                    <h3 class="text-center fs-2 fs-md-3">Company Overview</h3>
                    <hr class="short"
                        data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                        data-zanim-trigger="scroll" />
                </div>
                <div class="col-12">
                    <div class="bg-white px-3 mt-6 px-0 py-5 px-lg-5 rounded-3">
                        <h5>Earning the right</h5>
                        <p class="mt-3">As a first order business consulting firm, we help companies, foundations and
                            individuals make a difference. Our work gets to the heart of the matter. We break silos because
                            it takes more than any one check or policy or letter to tackle big issues like economic
                            security, human rights or climate sustainability. We prescribe a custom formula of advocacy,
                            collaboration, investment, philanthropy, policy and new ways of doing business in order to help
                            you make progress.</p>
                        <blockquote class="blockquote my-5 ms-lg-6" style="max-width: 700px;">
                            <h5 class="fw-medium ms-3 mb-0">But how do we do it? We like to call it earning the right,
                                walking the talk and playing the game &hellip;</h5>
                        </blockquote>
                        <p class="column-lg-2 dropcap">Elixir serves to help people with creative ideas succeed. Our
                            platform empowers millions of people — from individuals and local artists to entrepreneurs
                            shaping the world’s most iconic businesses — to share their stories and create an impactful,
                            stylish, and easy-to-manage online presence. The Cambridge office is the home of the Risk
                            management practice. We work to assure the safe performance of complex critical systems; develop
                            safety leadership and culture; manage safety and risk in high-hazard industries; understand
                            complex project risks, measure and report risk performance. We work across a wide range of
                            industries and public sector organizations that include upstream and downstream oil and gas;
                            rail and road transportation; construction; and gas utilities and distribution. We work
                            worldwide in Europe, Middle East and Asia, Africa and South America based out of our offices in
                            Cambridge, UK and Milan, Italy.</p>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
