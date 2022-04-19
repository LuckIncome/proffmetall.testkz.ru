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

	@foreach($prices as $price)
		<div class="row align-items-center price_row">
			<div class="col-2 col-sm-1">
				<picture>
					<img src="{{ asset('assets/img/pdf.png') }}" alt="{{ $price->title }}">
				</picture>
			</div>
			
			<div class="col-6 col-sm-7 col-md-3">
				<b>{{ $price->title }}</b>
			</div>
			@foreach(json_decode($price->file) as $file)
			<div class="col-2 col-md-3">
				<a href="{{ Voyager::image($file->download_link) }}" class="price_button" target="_blank">Просмотреть <img src="{{ asset('assets/img/eye.svg') }}" alt="{{ $price->title }}"></a>
			</div>

			<div class="col-2 col-md-3">
				<a href="{{ Voyager::image($file->download_link) }}" class="price_button" download="{{  $file->original_name }}">Скачать <img src="{{ asset('assets/img/download.svg') }}" alt="{{ $price->title }}"></a>
			</div>
			@endforeach
		</div>
	@endforeach

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
<div class="container">
	<div class="row">
		<div class="col-12 zag text-center">
			<h2>Наши партнеры</h2>
		</div>
		<div class="col-12">
			<div class="owl-carousel owl-carousel3 owl-theme">

				@foreach($partners as $partner)
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

@include('partials.news')

@endsection