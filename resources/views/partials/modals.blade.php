<div class="modal fade" id="application" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Заказ звонка</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="order_form" action="{{ route('order') }}" method="post" class="needs-validation" novalidate>
					@csrf
					<input type="text" name="name" placeholder="Ваше имя" class="form-control" required>
					<input type="text" name="phone" placeholder="Ваш телефон" class="phonee form-control" required>
					<input type="hidden" name="url" value="{{url()->current()}}">
					<input type="submit" value="Отправить" class="send">
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Пишите нам</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="write_form" action="{{ route('write') }}" method="post" class="needs-validation" novalidate>
                        <input type="text" name="name" placeholder="Ваше имя" class="form-control" required>
                        <input type="text" name="phone" placeholder="Ваш телефон" class="phonee form-control" required>
                        <input type="email" name="email" placeholder="Ваш E-mail">
                        <textarea name="text" placeholder="Ваше Сообщение"></textarea>
                        <input type="hidden" name="url" value="{{url()->current()}}">
                        <input type="submit" value="Отправить" class="send">
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="mobile_menu">
	<picture>
		<img src="{{ asset('assets/img/close.svg') }}" alt="" data-bs-dismiss="offcanvas" class="close">
	</picture>
	<div class="offcanvas-body">
		
		{{menu('header_menu','vendor.voyager.menu.header_menu')}}

		<div class="contacts_block">
			<a href="mailto:info@proffmetall.kz">info@proffmetall.kz</a><Br>
			<a href="tel:+77710333071">+7 771 033 30 71</a>
		</div>
		<div class="cities_block">
			<select id="city_mobile" name="city_mobile">
				<option value="almaty_mobile">Алматы</option>
				<option value="nursultan_mobile">Нур-Султан</option>
			</select>
			<div id="city_number_mobile">
				<div id="almaty_mobile"><a href="tel:+77710333071">+7 771 033 3071</a></div>
				<div id="nursultan_mobile"><a href="tel:+77710333072">+7 771 033 3072</a></div>
			</div>
		</div>
	</div>
</div>

<div class="offcanvas offcanvas-top" tabindex="-1" id="search_mobile">
	<div class="offcanvas-header">
		<h5 id="offcanvasTopLabel">Поиск по сайту</h5>
		<picture>
			<img src="{{ asset('assets/img/close.svg') }}" alt="" data-bs-dismiss="offcanvas" class="close">
		</picture>
	</div>
	<div class="offcanvas-body">
		<div class="search_block">
			<form action="{{ route('search') }}" method="get" class="needs-validation" novalidate>
				@csrf
				<input type="text" name="search" placeholder="Поиск по сайту" class="form-control" required>
				<input type="submit" value="" class="search">
			</form>
		</div>
	</div>
</div>