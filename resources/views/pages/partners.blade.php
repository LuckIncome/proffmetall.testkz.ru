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
    <div class="row">

        @foreach($partners as $partner)
            <div class="col-6 col-lg-3">
                <div class="partner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <picture>
                                    <img src="{{ Voyager::image($partner->image) }}" alt="{{ $partner->alt }}">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
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
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start zag2 order-1 order-lg-1">
            <h2>Полезная информация</h2>
        </div>
        <div class="col-lg-6 text-center text-lg-end order-3 order-lg-2 mt-3 mt-lg-0">
            <a href="#" class="blog">Все статьи</a>
        </div>
        <div class="col-12 order-2 order-lg-3">
            <div class="owl-carousel owl-carousel4 owl-theme">
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="{{ asset('assets/img/article1.png') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="{{ asset('assets/img/article2.png') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="{{ asset('assets/img/article1.png') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="{{ asset('assets/img/article2.png') }}" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection