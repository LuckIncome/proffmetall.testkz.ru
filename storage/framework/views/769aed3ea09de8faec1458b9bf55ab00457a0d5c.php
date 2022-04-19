
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
	<div class="row">
		
		<?php $__empty_1 = true; $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="col-6 col-lg-4 col-xl-3">
				<div class="product">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-lg-start">
							<div class="col-md-6">
								<a href="<?php echo e(route('catalogs.catalog', ['catalog' => $catalog->slug])); ?>">
									<picture>
										<img src="<?php echo e(Voyager::image($catalog->image)); ?>" alt="<?php echo e($catalog->title); ?>">
									</picture>
								</a>
							</div>
							<div class="col-md-6">
								<a href="<?php echo e(route('catalogs.catalog', ['catalog' => $catalog->slug])); ?>"><?php echo e($catalog->title); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<p><b>Продукт еще не загружен!</b></p>
		<?php endif; ?>
		
	</div>
	<div class="row pagination">
		<?php echo e($catalogs->links('partials.paginate')); ?>

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
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/catalogs/index.blade.php ENDPATH**/ ?>