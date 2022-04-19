<footer class="mt-auto">
	<div class="container-fluid mt-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<b>Наша продукция</b>
					<?php echo e(menu('first_product','vendor.voyager.menu.first_product')); ?>

				</div>
				<div class="col-6 col-sm-3 col-lg-2">
					<span></span>
					<?php echo e(menu('second_product','vendor.voyager.menu.second_product')); ?>

				</div>
				<div class="col-6 col-sm-3 col-lg-2">
					<span></span>
					<?php echo e(menu('third_product','vendor.voyager.menu.third_product')); ?>

				</div>
				<div class="col-6 col-lg-2 offset-lg-1 mt-3 mt-lg-0">
					<b>Компания</b>
					<?php echo e(menu('company','vendor.voyager.menu.company')); ?>

				</div>
				<div class="col-6 col-lg-2 mt-3 mt-lg-0">
					<b>Контакты</b>
					<?php $__currentLoopData = $phone_with_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pwn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pwn->link)); ?>"><?php echo e($pwn->value); ?></a> <br>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<br>
					<a href="mailto:<?php echo e($email->value); ?>"><?php echo e($email->value); ?></a><br>
					<Br>
					<?php echo e($adress->value); ?>

					<div class="soc">
						<?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<a href="<?php echo e($social->link); ?>" target="_blank">
								<picture>
									<img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->value); ?>">
								</picture>
							</a>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid cpy">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-center text-lg-start">
					© Все права защищены <?php echo e(date('Y')); ?> Компания «Профметалл KZ»
				</div>
				<div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0">
					<a href="https://i-marketing.kz" target="_blank">
						<picture>
							<img src="<?php echo e(asset('assets/img/im.svg')); ?>" alt="i-marketing">
						</picture>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/footer.blade.php ENDPATH**/ ?>