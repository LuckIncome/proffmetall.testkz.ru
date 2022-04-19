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
		
		@forelse($catalogs as $catalog)
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
		@empty
			<p><b>Продукт еще не загружен!</b></p>
		@endforelse
		
	</div>
	<div class="row pagination">
		{{ $catalogs->links('partials.paginate') }}
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