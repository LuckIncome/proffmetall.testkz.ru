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
    <div class="row align-items-center">
        <div class="col-lg-8 map">
            {!! $map->value !!}
        </div>
        <div class="col-lg-4 otz mt-5 mt-lg-0">
        	<span class="phone_contacts">
                @foreach ($phone_with_name as $pwn)
                    <a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pwn->link) }}">{{ $pwn->value }}</a> <br>
                @endforeach
            </span>
            <span class="email_contacts">
                <a href="mailto:{{ $email->value }}">{{ $email->value }}</a>
            </span>
            <span class="location_contacts">
                {{ $adress->value }}
            </span>
            <span class="soc_contacts">
                @foreach ($socials as $social)
                    <a href="{{ $social->link }}" target="_blank">
                        <picture>
                            <img src="{{ Voyager::image($social->icon) }}" alt="{{ $social->value }}">
                        </picture>
                    </a>
                @endforeach
            </span>
            <a href="#" class="send send_contacts" data-bs-toggle="modal" data-bs-target="#message">Пишите нам</a>
        </div>
    </div>
</div>

@endsection