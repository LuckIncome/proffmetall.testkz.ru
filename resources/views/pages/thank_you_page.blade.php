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
<div class="container thank">
    <div class="row">
        <div class="col text-center">
            <picture>
                <img src="{{ asset('assets/img/send.svg') }}" alt="send">
            </picture>
            <h2>Ваша заявка успешно отправлена</h2>
            <h3>Мы ответим Вам в ближайше время</h3>
            <a href="/">Вернуться на главную</a>
        </div>
    </div>
</div>

@endsection