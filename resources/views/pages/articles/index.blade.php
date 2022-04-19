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
        
        @forelse($articles as $article)
	        <div class="col-lg-6">
	            <div class="article">
	                <div class="container-fluid">
	                    <div class="row align-items-center">
	                        <div class="col-md-6">
	                            <a href="{{ route('articles.show', ['article' => $article->slug]) }}">
	                                <picture>
	                                    <img src="{{ $article->SmallThumb }}" alt="{{ $article->title }}">
	                                </picture>
	                            </a>
	                        </div>
	                        <div class="col-md-6">
	                            <span>{{date('d-m-Y', strtotime($article->created_at))}}</span>
	                            <a href="{{ route('articles.show', ['article' => $article->slug]) }}">{{ \Illuminate\Support\Str::limit($article->title, 75,'...')}}</a>
	                            <!--{!! \Illuminate\Support\Str::limit($article->first_content, 157,'...') !!}-->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
        @empty
			<p><b>Новость еще не загружен!</b></p>
		@endforelse
     
    </div>
    <div class="row pagination blog_pagination">
        {{$articles->links('partials.paginate')}}
    </div>
</div>

@endsection