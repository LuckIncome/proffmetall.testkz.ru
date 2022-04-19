@if ($paginator->hasPages())

<div class="col text-center">
	@foreach ($elements as $element) 
		@if (is_array($element))
			@foreach ($element as $page => $url)
			@if ($page == $paginator->currentPage()) 
				<a href="{{ $url }}" class="active"><span>{{ $page }}</span></a>
			@elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
				 <a href="{{ $url }}">{{ $page }}</a>
			@endif
			@if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
				...
			@endif
			@endforeach
		@endif
	@endforeach
</div>

@endif