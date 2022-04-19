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
    <div class="row mb-5">
        <div class="col-lg-9 search_block">
            <form action="{{ route('search') }}" method="get" class="needs-validation" novalidate>
                <input type="text" name="search" placeholder="Поиск по сайту" value="Наименование товара" class="form-control" required>
                <input type="submit" value="" class="search">
            </form>
        </div>
    </div>

    @forelse($data as $d)
        <div class="row search_element align-items-center">
            <div class="col-3 col-lg-2">
                <a href="{{ route('catalogs.catalog.tovar.table', ['catalog' => $d->tovar_child->child_catalog->slug, 'tovar' => $d->tovar_child->slug, 'table' => $d->slug]) }}">
                    <picture>
                        <img src="{{ Voyager::image($d->image) }}" alt="{{ $d->title }}">
                    </picture>
                </a>
            </div>
            <div class="col-9 col-lg-8">
                <a href="{{ route('catalogs.catalog.tovar.table', ['catalog' => $d->tovar_child->child_catalog->slug, 'tovar' => $d->tovar_child->slug, 'table' => $d->slug]) }}">{{ $d->title }}</a>
            </div>
        </div>
    @empty
        <p><b>Товар не найден!</b></p>
    @endforelse

    <div class="row pagination">
        {{ $data->links('partials.paginate') }}
    </div>
</div>

@endsection