@extends('partials.layout')
@section('page_title',(strlen($child_one->title) > 1 ? $child_one->title : ''))
@section('seo_title', (strlen($child_one->seo_title) > 1 ? $child_one->seo_title : ''))
@section('meta_keywords',(strlen($child_one->meta_keywords) > 1 ? $child_one->meta_keywords : ''))
@section('meta_description', (strlen($child_one->meta_description) > 1 ? $child_one->meta_description : ''))
@section('image','')
@section('url',url()->current())
@section('page_class','page')
@section('content')

<div class="container inner_zag">
	<div class="row">
		@include('partials.breadcrumbs', [
            'second_link' => '/catalogs',
            'second_title' => 'Каталог',
            'third_link' => '/catalogs/'.$catalog_one->slug,
            'child_title' => $catalog_one->title,
            'child_title_1' => $child_one->title,
        ])
		<div class="col-12">
			<h1>{{ $child_one->title }}</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		@forelse($tovars as $tovar)
			<div class="col-6 col-lg-4 col-xl-3">
				<div class="product">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-lg-start">
							<div class="col-md-6">
								<a href="{{ route('catalogs.catalog.tovar.table', ['catalog' => $catalog_one->slug, 'tovar' => $child_one->slug, 'table' => $tovar->slug]) }}">
									<picture>
										<img src="{{ Voyager::image($tovar->image) }}" alt="{{ $tovar->title }}">
									</picture>
								</a>
							</div>
							<div class="col-md-6">
								<a href="{{ route('catalogs.catalog.tovar.table', ['catalog' => $catalog_one->slug, 'tovar' => $child_one->slug, 'table' => $tovar->slug]) }}">{{ $tovar->title }}</a>
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
		{{ $tovars->links('partials.paginate') }}
	</div>
</div>

@include('partials.news')  

@endsection