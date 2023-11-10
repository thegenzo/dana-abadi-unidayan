@extends('web.layout.app')

@section('title', $news->title)

@section('content')
    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="bg-100">
        <div class="container">
            <div class="overflow-hidden mb-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div data-zanim-xs='{"delay":0}'><a class="d-inline-block text-500" href="#!">{{ $news->user->name }}</a>, &nbsp;<a
                        class="d-inline-block text-500" href="#!">{{ \Carbon\Carbon::parse($news->created_at)->locale('id')->isoFormat('LL') }}</a></div>
                <h4 data-zanim-xs='{"delay":0.1}'>{{ $news->title }}</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-6"> <img class="card-img-top" src="{{ asset($news->cover_image)}}" alt="new image" />
                        <div class="card-body p-5">
                            {!! $news->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->
@endsection
