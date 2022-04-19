@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="container inner_zag">
    <div class="row">

        @include('partials.breadcrumbs', ['title' => $page->title])

        <div class="col-12">
            <h1>{{ $page->title }}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row certs">
        
        @foreach($certificates as $certificate)
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <a href="{{ Voyager::image($certificate->image) }}" data-fancybox="cert">
                    <picture>
                        <img src="{{ Voyager::image($certificate->image) }}" alt="{{ $certificate->alt }}">
                    </picture>
                </a>
            </div>
        @endforeach
      
    </div>
</div>
<div class="container">
    <div class="row">

        @foreach($advantages as $advantage)
            <div class="col-md-6 col-lg-4">
                <div class="benefit">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-3">
                                <picture>
                                    <img src="{{ Voyager::image($advantage->image) }}" alt="{{ $advantage->title }}">
                                </picture>
                            </div>
                            <div class="col-9">
                                {{ $advantage->title }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
      
    </div>
</div>

@include('partials.news')  

@endsection