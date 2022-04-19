@extends('partials.layout')
@section('page_title', __('Страница не найдена'))
@section('seo_title',  __('Страница не найдена'))
@section('meta_keywords', __('Страница не найдена'))
@section('meta_description',  __('Страница не найдена'))
@section('image', '')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="container inner_zag">
    <div class="row">
        <div class="col-12">

        	@include('partials.breadcrumbs', ['title' => 'Страница не найдена'])

        </div>
        <div class="col-12">
            <h1>Страница не найдена</h1>
        </div>
    </div>
</div>
<div class="container thank">
    <div class="row">
        <div class="col text-center">
            <picture>
                <img src="{{ asset('assets/img/404.svg') }}" alt="404">
            </picture>
            <h2>Запрашиваемая Вами страница не найдена</h2>
            <h3>Попробуйте вернуться на главную и повторить поиск</h3>
            <a href="/">Вернуться на главную</a>
        </div>
    </div>
</div>

@endsection