<div class="col-12">
	<ul>
		@if(isset($child_title))
			@if(isset($child_title_1))
				@if(isset($child_title_2))
					<li><a href="/">Главная</a></li>
					<li><a href="{{ $second_link }}">{{ $second_title }}</a></li>
					<li><a href="{{ $third_link }}">{{ $child_title }}</a></li>
					<li><a href="{{ $fourth_link }}">{{ $child_title_1 }}</a></li>
					<li>{{ $child_title_2 }}</li>
				@else
					<li><a href="/">Главная</a></li>
					<li><a href="{{ $second_link }}">{{ $second_title }}</a></li>
					<li><a href="{{ $third_link }}">{{ $child_title }}</a></li>
					<li>{{ $child_title_1 }}</li>
				@endif
			@else
				<li><a href="/">Главная</a></li>
	            <li><a href="{{ $second_link }}">{{ $second_title }}</a></li>
	            <li>{{ $child_title }}</li>
            @endif
		@else
			<li><a href="/">Главная</a></li>
			<li>{{ $title }}</li>
		@endif
	</ul>
</div>