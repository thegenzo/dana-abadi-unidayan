@extends('web.layout.app')

@section('title', 'Detail Berita')

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
            <div class="overflow-hidden mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div data-zanim-xs='{"delay":0}'><a class="d-inline-block text-500" href="#!">Thomas Been</a>, &nbsp;<a
                        class="d-inline-block text-500" href="#!">May 15, 2017</a></div>
                <h4 data-zanim-xs='{"delay":0.1}'>Tax impacts of lease accounting change</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-6"> <img class="card-img-top" src="{{ asset('web-assets/assets/img/11.jpg')}}" alt="new image" />
                        <div class="card-body p-5">
                            <p class="dropcap">On 9 August 2016, HMRC released a consultation document to flag some
                                potential tax impacts that a forthcoming change in lease accounting may have on the funding
                                of plant and machinery. From 2019, lessees using IFRS (including FRS 101), as opposed to FRS
                                102 (UK GAAP), will no longer have to distinguish between finance and operating leases. All
                                leases (except some small value leases or very short leases) will be capitalized on the
                                lessee’s balance sheet at the NPV of the future payments from the day the lease starts. This
                                accounting change will not affect lessors. At the moment, the tax treatment typically
                                depends on whether a lease is a ‘long funding lease’ or not. If it is, then it is the lessee
                                who gets capital allowances (CAs). However, much anti-avoidance legislation is focused on
                                the concept of finance leases and the IFRS change will interfere with that. In its
                                consultation, HMRC has floated four options for addressing the issue. The first is broadly
                                the status quo, with some tinkering. The others contain the more radical suggestion to move
                                towards an accounts-based regime for taxing leases, using a system of debits and credits
                                somewhat akin to the loan relationship regime and which would similarly eliminate the
                                capital/revenue divide. ith such a proposal, including:</p><a class="d-block my-3 ms-4"
                                href="#!">gust-2016/tax-impacts-of-lease-accunting-changes#sthash.J6Ddydx2.dpuf</a>
                            <p>HMRC has identified several issues which should be addressed in conjunction with such a
                                proposal, including:</p>
                            <ol>
                                <li>
                                    <p class="mb-2">Can HMRC trust companies to use ‘sensible’ depreciation policies or
                                        will there need to be legislation for it?</p>
                                </li>
                                <li>
                                    <p class="mb-2">In order to avoid distorting the ‘lease or buy’ decision, the
                                        government may be willing to offer an enhanced deduction to lessees that would
                                        otherwise have qualified for the AIA.</p>
                                </li>
                                <li>
                                    <p class="mb-2">Could HMRC combine an accounts-based regime with giving the lessee an
                                        option to claim CAs on the ‘right of use’ asset?</p>
                                </li>
                            </ol>
                            <p>Inevitably, there is a long way to go on these issues. But the eventual outcome is
                                potentially quite far-reaching for UK corporates – for example if HMRC can become
                                comfortable on the issue of ‘sensible’ depreciation policies without a lot of new
                                anti-avoidance legislation.</p>
                            <p>If you have any questions on the tax implications of lease accounting please contact David
                                Porter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
