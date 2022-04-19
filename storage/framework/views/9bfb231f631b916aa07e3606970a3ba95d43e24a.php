<div class="fixed_head m_1 d-none d-lg-block">
	<div class="container-fluid">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-3 logo_block">
					<a href="/">
						<picture>
							<img src="<?php echo e(Voyager::image(setting('site.header_logo'))); ?>" alt="proffmetall_logo">
						</picture>
					</a>
				</div>
				<div class="col-2 text-end">
					<a href="#" class="search_fixed" data-bs-toggle="offcanvas" data-bs-target="#search_mobile">
						<picture>
							<img src="<?php echo e(asset('assets/img/search.svg')); ?>" alt="search">
						</picture>
					</a>
				</div>
				<div class="col-2 text-end contacts_block">
					<a href="mailto:<?php echo e($email->value); ?>"><?php echo e($email->value); ?></a><Br>
					<a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_one->link)); ?>"><?php echo e($phone_one->value); ?></a>
				</div>
				<div class="col-2 text-end">
					<select id="city_fixed" name="city_fixed">
						<option value="almaty_fixed">Алматы</option>
						<option value="nursultan_fixed">Нур-Султан</option>
					</select>
					<div id="city_number_fixed">
						<?php $__currentLoopData = $phone_almaty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div id="almaty_fixed"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pa->link)); ?>"><?php echo e($pa->value); ?></a></div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php $__currentLoopData = $phone_astana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div id="nursultan_fixed"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pas->link)); ?>"><?php echo e($pas->value); ?></a></div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="col-2 text-end">
					<a href="#" class="application" data-bs-toggle="modal" data-bs-target="#application">Заказать звонок</a>
				</div>
				<div class="col-1 text-end">
					<a href="#" data-bs-toggle="offcanvas" data-bs-target="#mobile_menu">
						<picture>
							<img src="<?php echo e(asset('assets/img/menu.svg')); ?>" alt="menu">
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
							<img src="<?php echo e(Voyager::image(setting('site.header_logo'))); ?>" alt="proffmetall_logo">
						</picture>
					</a>
				</div>
				<div class="col-lg-3 search_block d-none d-lg-block">
					<form action="<?php echo e(route('search')); ?>" method="get" class="needs-validation" novalidate>
						<input type="text" name="search" placeholder="Поиск по сайту" class="form-control" required>
						<input type="submit" value="" class="search">
					</form>
				</div>
				<div class="col-lg-2 text-end contacts_block d-none d-lg-block">
					<a href="mailto:<?php echo e($email->value); ?>"><?php echo e($email->value); ?></a><Br>
					<a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_one->link)); ?>"><?php echo e($phone_one->value); ?></a>
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
						<?php $__currentLoopData = $phone_almaty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div id="almaty"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pa->link)); ?>"><?php echo e($pa->value); ?></a></div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<?php $__currentLoopData = $phone_astana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div id="nursultan"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pas->link)); ?>"><?php echo e($pas->value); ?></a></div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    <div id="aktau"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_aktau->link)); ?>"><?php echo e($phone_aktau->value); ?></a></div>
						    <div id="ustKamenogorsk"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_ustKamenogorsk->link)); ?>"><?php echo e($phone_ustKamenogorsk->value); ?></a></div>
						    <div id="atyrau"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_atyrau->link)); ?>"><?php echo e($phone_atyrau->value); ?></a></div>
						    <div id="kyzylorda"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_kyzylorda->link)); ?>"><?php echo e($phone_kyzylorda->value); ?>6</a></div>
						    <div id="kostanay"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_kostanay->link)); ?>"><?php echo e($phone_kostanay->value); ?></a></div>
						    <div id="aktobe"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_aktobe->link)); ?>"><?php echo e($phone_aktobe->value); ?></a></div>
						    <div id="karaganda"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_karaganda->link)); ?>"><?php echo e($phone_karaganda->value); ?></a></div>
						    <div id="kokshetau"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_kokshetau->link)); ?>"><?php echo e($phone_kokshetau->value); ?></a></div>
						    <div id="petropavlovsk"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_petropavlovsk->link)); ?>"><?php echo e($phone_petropavlovsk->value); ?></a></div>
						    <div id="uralsk"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_uralsk->link)); ?>"><?php echo e($phone_uralsk->value); ?></a></div>
						    <div id="semei"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_semei->link)); ?>"><?php echo e($phone_semei->value); ?></a></div>
						    <div id="taldykorgan"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_taldykorgan->link)); ?>"><?php echo e($phone_taldykorgan->value); ?></a></div>
						    <div id="zhezkazgan"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_zhezkazgan->link)); ?>"><?php echo e($phone_zhezkazgan->value); ?></a></div>
						    <div id="taraz"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_taraz->link)); ?>"><?php echo e($phone_taraz->value); ?></a></div>
						    <div id="pavlodar"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_pavlodar->link)); ?>"><?php echo e($phone_pavlodar->value); ?></a></div>
						    <div id="shymkent"><a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $phone_shymkent->link)); ?>"><?php echo e($phone_shymkent->value); ?></a></div>
					</div>
				</div>
				<div class="col-lg-2 text-end d-none d-lg-block">
					<a href="#" class="application" data-bs-toggle="modal" data-bs-target="#application">Заказать звонок</a>
				</div>
				<div class="d-lg-none col-2 text-end">
					<picture data-bs-toggle="offcanvas" data-bs-target="#search_mobile">
						<img src="<?php echo e(asset('assets/img/search.svg')); ?>" alt="search">
					</picture>
				</div>
				<div class="d-lg-none col-2 text-end">
					<a href="#">
						<picture>
							<img src="<?php echo e(asset('assets/img/phone.svg')); ?>" alt="phone">
						</picture>
					</a>
				</div>
				<div class="d-lg-none col-2 text-end">
					<picture data-bs-toggle="offcanvas" data-bs-target="#mobile_menu">
						<img src="<?php echo e(asset('assets/img/menu.svg')); ?>" alt="menu">
					</picture>
				</div>
			</div>
			<div class="row d-none d-lg-flex">
				<div class="col">
					<?php echo e(menu('header_menu','vendor.voyager.menu.header_menu')); ?>

				</div>
			</div>
		</div>
	</div>
</header><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/header.blade.php ENDPATH**/ ?>