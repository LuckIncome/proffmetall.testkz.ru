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
        <div class="col-lg-7">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               
                @foreach($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading{{ $faq->id }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}" aria-expanded="false">
                                {{ $faq->question }}
                            </button>
                        </h2>
                        <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            	{!! $faq->answer !!}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 otz mt-5 mt-lg-0">
        	<span>Не нашли ответ?</span>
        	<b>Задайте свой вопрос!</b>
            <form id="question_form" action="{{ route('question') }}" method="post" class="needs-validation" novalidate>
            	<input type="text" name="name" placeholder="Ваше имя" class="form-control" required>
            	<input type="text" name="email" placeholder="Ваш E-mail" class="form-control" required>
            	<textarea name="question" placeholder="Ваш вопрос" class="form-control" required></textarea>
                <input type="hidden" name="url" value="{{url()->current()}}">
            	<input type="submit" value="Отправить" class="send">
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 zag text-center">
            <h2>Наши партнеры</h2>
        </div>
        <div class="col-12">
            <div class="owl-carousel owl-carousel3 owl-theme">
                
                @foreach ($partners as $partner)
                    <div class="item">
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
                @endforeach
         
            </div>
        </div>
    </div>
</div>

@endsection