@extends('partials.layout')
@section('page_title',(strlen($page->title) > 1 ? $page->title : ''))
@section('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : ''))
@section('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : ''))
@section('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-3 d-none d-lg-block">
			<div class="catalog_list_block">
				<div class="catalog_list">
					<ul>						
						@foreach($title_catalogs as $title_catalog)
							<li>
								<a href="{{ route('catalogs.catalog', ['catalog' => $title_catalog->slug]) }}">{{ $title_catalog->title }}</a>
								<ul>
									@foreach($title_catalog->child as $child)		
											<li><a href="{{ route('catalogs.catalog.tovar', ['catalog' => $title_catalog->slug, 'tovar' => $child->slug]) }}">{{ $child->title }}</a></li>
									@endforeach
								</ul>
							</li>
						@endforeach	
					</ul>	
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="owl-carousel owl-carousel2 owl-theme">
				
				@foreach($sliders as $slider)
					<div class="item">
						<picture>
							<img src="{{ Voyager::image($slider->image) }}" alt="{{ $slider->title }}">
						</picture>
						<div class="container-fluid">
							<div class="row align-items-end">
								<div class="col text-center text-lg-start">
									<h1>{{ $slider->title }}</h1>
									<h4>{{ $slider->sub_title }}</h4>
									<a href="{{ $slider->link }}">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		@foreach($advantages as $advantage)			
			<div class="col-6 col-lg-4">
				<div class="benefit">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-sm-start">
							<div class="col-sm-3">
								<picture>
									<img src="{{ Voyager::image($advantage->image) }}" alt="{{ $advantage->title }}">
								</picture>
							</div>
							<div class="col-sm-9">
								{{ $advantage->title }}
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
		<div class="col-12 zag text-center">
			<h2>Каталог продукции</h2>
		</div>

		@foreach($catalogs as $catalog)
			<div class="col-6 col-lg-4 col-xl-3">
				<div class="product">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-lg-start">
							<div class="col-md-6">
								<a href="{{ route('catalogs.catalog', ['catalog' => $catalog->slug]) }}">
									<picture>
										<img src="{{ Voyager::image($catalog->image) }}" alt="{{ $catalog->title }}">
									</picture>
								</a>
							</div>
							<div class="col-md-6">
								<a href="{{ route('catalogs.catalog', ['catalog' => $catalog->slug]) }}">{{ $catalog->title }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		
		<div class="col-12 text-center more">
			<a href="{{ route('catalogs') }}">Перейти в каталог</a>
		</div>
	</div>
</div>
<div class="container about_main">
	<div class="row">
		<div class="col-lg-6">
			@if($about->first_video)
    			@foreach (json_decode($about->first_video) as $video)
                <video style="width:100%;height:100%;" no-controls autoplay loop playsinline muted>
                    <source src="{{Voyager::image($video->download_link)}}"  type='video/mp4'>
                </video>
                @endforeach
            @else
                <picture>
			        <img src="{{ Voyager::image($about->first_image) }}" alt="О компании">
			    </picture>
            @endif
		</div>
		<div class="col-lg-6">
			<b>О компании</b>
			{!! $about->first_content !!}
			<a href="/about" class="about_more">Подробнее о компании</a>
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

<div class="container mt-5">
	<div class="row align-items-center">
		<div class="col-lg-6 text-center text-lg-start zag2 order-1 order-lg-1">
			<h2>Полезная информация</h2>
		</div>
		<div class="col-lg-6 text-center text-lg-end order-3 order-lg-2 mt-3 mt-lg-0">
			<a href="/articles" class="blog">Все статьи</a>
		</div>
		<div class="col-12 order-2 order-lg-3">
			<div class="owl-carousel owl-carousel4 owl-theme">
				@foreach($articles as $article)
				<div class="item">
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
								<span>{{ date('d-m-Y', strtotime($article->created_at)) }}</span>
								<a href="{{ route('articles.show', ['article' => $article->slug]) }}">{{ \Illuminate\Support\Str::limit($article->title, 75,'...')}}</a>
								<br>
							    {!! \Illuminate\Support\Str::limit(strip_tags($article->first_content), 100,'...') !!}
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