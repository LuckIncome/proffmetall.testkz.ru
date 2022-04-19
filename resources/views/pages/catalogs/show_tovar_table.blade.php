@extends('partials.layout')
@section('page_title',(strlen($tovar->title) > 1 ? $tovar->title : ''))
@section('seo_title', (strlen($tovar->seo_title) > 1 ? $tovar->seo_title : ''))
@section('meta_keywords',(strlen($tovar->meta_keywords) > 1 ? $tovar->meta_keywords : ''))
@section('meta_description', (strlen($tovar->meta_description) > 1 ? $tovar->meta_description : ''))
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
            'fourth_link' => '/catalogs/'.$catalog_one->slug.'/'.$child_one->slug,
            'child_title_1' => $child_one->title,
            'child_title_2' => $tovar->title,
        ])
        <div class="col-12">
            <h1>{{ $tovar->title }}</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table_sort">
                    <thead>
                        <tr>
                            @if($table->product)
                                <th class="sort_start">Продукт</th>
                            @endif
                            @if($table->mark)
                                <th class="sort_start">Марка</th>
                            @endif
                            @if($table->size)
                                <th class="sort_start">Размер</th>
                            @endif
                            @if($table->length)
                                <th class="sort_start">Длина</th>
                            @endif
                            @if($table->diameter)
                                <th class="sort_start">Диаметр,мм</th>
                            @endif
                            @if($table->thickness)
                                <th class="sort_start">Толщина,мм</th>
                            @endif
                            @if($table->gost)
                                <th class="sort_start">ГОСТ, ОСТ, ТУ</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                    	@forelse($tables as $table)
	                        <tr>
	                            @if($table->product)
	                                <td><b>{{ $table->product }}</b></td>
	                            @endif
	                            @if($table->mark)
	                                <td>{{ $table->mark }}</td>
	                            @endif
	                            @if($table->size)
	                                <td>{{ $table->size }}</td>
	                            @endif
	                            @if($table->length)
                                    <td>{{ $table->length }}</td>
                                @endif
                                @if($table->diameter)
                                    <td>{{ $table->diameter }}</td>
                                @endif
                                @if($table->thickness)
                                    <td>{{ $table->thickness }}</td>
                                @endif
                                @if($table->gost)
	                                <td>{{ $table->gost }}</td>
	                            @endif
	                        </tr>
	                    @empty
	                    	<tr>
								<td><p><b>Продукт еще не загружен!</b></p></td>
								<td><p><b>Продукт еще не загружен!</b></p></td>
	                            <td><p><b>Продукт еще не загружен!</b></p></td>
	                            <td><p><b>Продукт еще не загружен!</b></p></td>
							</tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row pagination">
				{{ $tables->links('partials.paginate') }}
			</div>
        </div>
    </div>
</div>

@endsection