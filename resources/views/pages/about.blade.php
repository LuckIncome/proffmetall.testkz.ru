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
<div class="container about_main">
	<div class="row align-items-center">
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
			{!! $about->first_content !!}
		</div>
	</div>
</div>
<div class="container-fluid about_inner_2">
	<div class="container about_main">
		<div class="row align-items-center">
			<div class="col-lg-6 order-2 order-lg-1">
				{!! $about->second_content !!}
			</div>
			<div class="col-lg-6 order-1 order-lg-2">
				<picture>
					<img src="{{ Voyager::image($about->second_image) }}" alt="О компании">
				</picture>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 zag text-center">
			<h1>Благодарственные письма</h1>
		</div>
		<div class="col-12">
			<div class="owl-carousel owl-carousel5 owl-theme">
				
				@foreach($certificates as $certificate)
					<div class="item">
						<a href="{{ Voyager::image($certificate->image) }}" data-fancybox="blag">
							<picture>
								<img src="{{ Voyager::image($certificate->image) }}" alt="{{ $certificate->alt }}">
							</picture>
						</a>
					</div>
				@endforeach
			
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		@foreach ($advantages as $advantage)				
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

@include('partials.news')  

@endsection