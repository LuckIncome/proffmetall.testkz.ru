
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container inner_zag">
	<div class="row">

		<?php echo $__env->make('partials.breadcrumbs', ['title' => $page->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="col-12">
			<h1><?php echo e($page->title); ?></h1>
		</div>
	</div>
</div>
<div class="container">

	<?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row align-items-center price_row">
			<div class="col-2 col-sm-1">
				<picture>
					<img src="<?php echo e(asset('assets/img/pdf.png')); ?>" alt="<?php echo e($price->title); ?>">
				</picture>
			</div>
			
			<div class="col-6 col-sm-7 col-md-3">
				<b><?php echo e($price->title); ?></b>
			</div>
			<?php $__currentLoopData = json_decode($price->file); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-2 col-md-3">
				<a href="<?php echo e(Voyager::image($file->download_link)); ?>" class="price_button" target="_blank">Просмотреть <img src="<?php echo e(asset('assets/img/eye.svg')); ?>" alt="<?php echo e($price->title); ?>"></a>
			</div>

			<div class="col-2 col-md-3">
				<a href="<?php echo e(Voyager::image($file->download_link)); ?>" class="price_button" download="<?php echo e($file->original_name); ?>">Скачать <img src="<?php echo e(asset('assets/img/download.svg')); ?>" alt="<?php echo e($price->title); ?>"></a>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<div class="container">
	<div class="row">

		<?php $__currentLoopData = $advantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-6 col-lg-4">
				<div class="benefit">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-3">
								<picture>
									<img src="<?php echo e(Voyager::image($advantage->image)); ?>" alt="<?php echo e($advantage->title); ?>">
								</picture>
							</div>
							<div class="col-9">
								<?php echo e($advantage->title); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 zag text-center">
			<h2>Наши партнеры</h2>
		</div>
		<div class="col-12">
			<div class="owl-carousel owl-carousel3 owl-theme">

				<?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item">
						<div class="container-fluid">
							<div class="row align-items-center">
								<div class="col text-center">
									<picture>
										<img src="<?php echo e(Voyager::image($partner->image)); ?>" alt="<?php echo e($partner->alt); ?>">
									</picture>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			</div>
		</div>
	</div>
</div>

<?php echo $__env->make('partials.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/price.blade.php ENDPATH**/ ?>