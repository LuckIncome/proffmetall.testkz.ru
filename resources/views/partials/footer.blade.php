<footer class="mt-auto">
	<div class="container-fluid mt-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<b>Наша продукция</b>
					{{ menu('first_product','vendor.voyager.menu.first_product') }}
				</div>
				<div class="col-6 col-sm-3 col-lg-2">
					<span></span>
					{{ menu('second_product','vendor.voyager.menu.second_product') }}
				</div>
				<div class="col-6 col-sm-3 col-lg-2">
					<span></span>
					{{ menu('third_product','vendor.voyager.menu.third_product') }}
				</div>
				<div class="col-6 col-lg-2 offset-lg-1 mt-3 mt-lg-0">
					<b>Компания</b>
					{{ menu('company','vendor.voyager.menu.company') }}
				</div>
				<div class="col-6 col-lg-2 mt-3 mt-lg-0">
					<b>Контакты</b>
					@foreach ($phone_with_name as $pwn)
						<a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pwn->link) }}">{{ $pwn->value }}</a> <br>
					@endforeach
					<br>
					<a href="mailto:{{ $email->value }}">{{ $email->value }}</a><br>
					<Br>
					{{ $adress->value }}
					<div class="soc">
						@foreach ($socials as $social)
							<a href="{{ $social->link }}" target="_blank">
								<picture>
									<img src="{{ Voyager::image($social->icon) }}" alt="{{ $social->value }}">
								</picture>
							</a>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cpy">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-start">
					© Все права защищены {{ date('Y') }} Компания «Профметалл KZ»
				</div>
				<div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0">
					<a href="https://i-marketing.kz" target="_blank">
						<picture>
							<img src="{{ asset('assets/img/im.svg') }}" alt="i-marketing">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>