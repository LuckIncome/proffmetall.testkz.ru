@extends('partials.layout')
@section('page_title',(strlen($article_one->title) > 1 ? $article_one->title : ''))
@section('seo_title', (strlen($article_one->seo_title) > 1 ? $article_one->seo_title : ''))
@section('meta_keywords',(strlen($article_one->meta_keywords) > 1 ? $article_one->meta_keywords : ''))
@section('meta_description', (strlen($article_one->meta_description) > 1 ? $article_one->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="container inner_zag">
    <div class="row">

        @include('partials.breadcrumbs', [
            'second_link' => '/articles',
            'second_title' => 'Полезная информация',
            'child_title' => $article_one->title
        ])

        <div class="col-12">
            <h1>{{ $article_one->title }}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 article_image">
            <a href="{{ Voyager::image($article_one->image) }}" data-fancybox="article">
                <picture>
                    <img src="{{ $article_one->BigThumb }}" alt="{{ $article_one->title }}">
                </picture>
            </a>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 article_text">
            <span class="date">{{date('d-m-Y', strtotime($article_one->created_at))}}</span>
            {!! $article_one->first_content !!}
        </div>
        <div class="col-12">
            {!! $article_one->second_content !!}
        </div>
    </div>
    <div class="row autor">
        <div class="col-md-6 text-md-start text-center">
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,whatsapp,moimir"></div>
        </div>
        <div class="col-md-6 text-md-end text-center mt-2 mt-md-0">
            Автор: <b>{{ $article_one->author }}</b>
        </div>
    </div>
</div>

@include('partials.news')      

@endsection