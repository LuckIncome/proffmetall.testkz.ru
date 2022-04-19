<div class="fixed_head m_1 d-none d-lg-block">
	<div class="container-fluid">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3 logo_block">
					<a href="/">
						<picture>
							<img src="{{ Voyager::image(setting('site.header_logo')) }}" alt="proffmetall_logo">
						</picture>
					</a>
				</div>
				<div class="col-2 text-end">
					<a href="#" class="search_fixed" data-bs-toggle="offcanvas" data-bs-target="#search_mobile">
						<picture>
							<img src="{{ asset('assets/img/search.svg') }}" alt="search">
						</picture>
					</a>
				</div>
				<div class="col-2 text-end contacts_block">
					<a href="mailto:{{ $email->value }}">{{ $email->value }}</a><Br>
					<a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_one->link) }}">{{ $phone_one->value }}</a>
				</div>
				<div class="col-2 text-end">
					<select id="city_fixed" name="city_fixed">
						<option value="almaty_fixed">Алматы</option>
						<option value="nursultan_fixed">Нур-Султан</option>
					</select>
					<div id="city_number_fixed">
						@foreach ($phone_almaty as $pa)
							<div id="almaty_fixed"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pa->link) }}">{{ $pa->value }}</a></div>
						@endforeach
						@foreach ($phone_astana as $pas)
							<div id="nursultan_fixed"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pas->link) }}">{{ $pas->value }}</a></div>
						@endforeach
					</div>
				</div>
				<div class="col-2 text-end">
					<a href="#" class="application" data-bs-toggle="modal" data-bs-target="#application">Заказать звонок</a>
				</div>
				<div class="col-1 text-end">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#mobile_menu">
						<picture>
							<img src="{{ asset('assets/img/menu.svg') }}" alt="menu">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<header>
	<div class="container-fluid">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-lg-3 logo_block">
					<a href="/">
						<picture>
							<img src="{{ Voyager::image(setting('site.header_logo')) }}" alt="proffmetall_logo">
						</picture>
					</a>
				</div>
				<div class="col-lg-3 search_block d-none d-lg-block">
					<form action="{{ route('search') }}" method="get" class="needs-validation" novalidate>
						<input type="text" name="search" placeholder="Поиск по сайту" class="form-control" required>
						<input type="submit" value="" class="search">
					</form>
				</div>
				<div class="col-lg-2 text-end contacts_block d-none d-lg-block">
					<a href="mailto:{{ $email->value }}">{{ $email->value }}</a><Br>
					<a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_one->link) }}">{{ $phone_one->value }}</a>
				</div>
				<div class="col-lg-2 text-end d-none d-lg-block">
					<select id="city" name="city">
						<option value="almaty">Алматы</option>
						<option value="nursultan">Нур-Султан</option>
						<option value="aktau">Актау</option>
						<option value="ustKamenogorsk">Усть-Каменогорск</option>
						<option value="atyrau">Атырау</option>
						<option value="kyzylorda">Кызылорда</option>
						<option value="kostanay">Костанай</option>
						<option value="aktobe">Актобе</option>
						<option value="karaganda">Караганда</option>
						<option value="kokshetau">Кокшетау</option>
						<option value="petropavlovsk">Петропавловск</option>
						<option value="uralsk">Уральск</option>
						<option value="semei">Семей</option>
						<option value="taldykorgan">Талдыкорган</option>
						<option value="zhezkazgan">Жезказган</option>
						<option value="taraz">Тараз</option>
						<option value="pavlodar">Павлодар</option>
						<option value="shymkent">Шымкент</option>
					</select>
					<div id="city_number">
						@foreach ($phone_almaty as $pa)
							<div id="almaty"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pa->link) }}">{{ $pa->value }}</a></div>
						@endforeach
						@foreach ($phone_astana as $pas)
							<div id="nursultan"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $pas->link) }}">{{ $pas->value }}</a></div>
						@endforeach
						    <div id="aktau"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_aktau->link) }}">{{ $phone_aktau->value }}</a></div>
						    <div id="ustKamenogorsk"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_ustKamenogorsk->link) }}">{{ $phone_ustKamenogorsk->value }}</a></div>
						    <div id="atyrau"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_atyrau->link) }}">{{ $phone_atyrau->value }}</a></div>
						    <div id="kyzylorda"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_kyzylorda->link) }}">{{ $phone_kyzylorda->value }}6</a></div>
						    <div id="kostanay"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_kostanay->link) }}">{{ $phone_kostanay->value }}</a></div>
						    <div id="aktobe"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_aktobe->link) }}">{{ $phone_aktobe->value }}</a></div>
						    <div id="karaganda"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_karaganda->link) }}">{{ $phone_karaganda->value }}</a></div>
						    <div id="kokshetau"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_kokshetau->link) }}">{{ $phone_kokshetau->value }}</a></div>
						    <div id="petropavlovsk"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_petropavlovsk->link) }}">{{ $phone_petropavlovsk->value }}</a></div>
						    <div id="uralsk"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_uralsk->link) }}">{{ $phone_uralsk->value }}</a></div>
						    <div id="semei"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_semei->link) }}">{{ $phone_semei->value }}</a></div>
						    <div id="taldykorgan"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_taldykorgan->link) }}">{{ $phone_taldykorgan->value }}</a></div>
						    <div id="zhezkazgan"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_zhezkazgan->link) }}">{{ $phone_zhezkazgan->value }}</a></div>
						    <div id="taraz"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_taraz->link) }}">{{ $phone_taraz->value }}</a></div>
						    <div id="pavlodar"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_pavlodar->link) }}">{{ $phone_pavlodar->value }}</a></div>
						    <div id="shymkent"><a href="tel:{{ preg_replace("/[^,.0-9]/", '', $phone_shymkent->link) }}">{{ $phone_shymkent->value }}</a></div>
					</div>
				</div>
				<div class="col-lg-2 text-end d-none d-lg-block">
					<a href="#" class="application" data-bs-toggle="modal" data-bs-target="#application">Заказать звонок</a>
				</div>
				<div class="d-lg-none col-2 text-end">
					<picture data-bs-toggle="offcanvas" data-bs-target="#search_mobile">
						<img src="{{ asset('assets/img/search.svg') }}" alt="search">
					</picture>
				</div>
				<div class="d-lg-none col-2 text-end">
					<a href="#">
						<picture>
							<img src="{{ asset('assets/img/phone.svg') }}" alt="phone">
						</picture>
					</a>
				</div>
				<div class="d-lg-none col-2 text-end">
					<picture data-bs-toggle="offcanvas" data-bs-target="#mobile_menu">
						<img src="{{ asset('assets/img/menu.svg') }}" alt="menu">
					</picture>
				</div>
			</div>
			<div class="row d-none d-lg-flex">
				<div class="col">
					{{menu('header_menu','vendor.voyager.menu.header_menu')}}
				</div>
			</div>
		</div>
	</div>
</header>