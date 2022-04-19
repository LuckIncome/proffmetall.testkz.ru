
<?php $__env->startSection('page_title',(strlen($child_one->title) > 1 ? $child_one->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($child_one->seo_title) > 1 ? $child_one->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($child_one->meta_keywords) > 1 ? $child_one->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($child_one->meta_description) > 1 ? $child_one->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container inner_zag">
	<div class="row">
		<?php echo $__env->make('partials.breadcrumbs', [
            'second_link' => '/catalogs',
            'second_title' => 'Каталог',
            'third_link' => '/catalogs/'.$catalog_one->slug,
            'child_title' => $catalog_one->title,
            'child_title_1' => $child_one->title,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<div class="col-12">
			<h1><?php echo e($child_one->title); ?></h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		<?php $__empty_1 = true; $__currentLoopData = $tovars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tovar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="col-6 col-lg-4 col-xl-3">
				<div class="product">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-lg-start">
							<div class="col-md-6">
								<a href="<?php echo e(route('catalogs.catalog.tovar.table', ['catalog' => $catalog_one->slug, 'tovar' => $child_one->slug, 'table' => $tovar->slug])); ?>">
									<picture>
										<img src="<?php echo e(Voyager::image($tovar->image)); ?>" alt="<?php echo e($tovar->title); ?>">
									</picture>
								</a>
							</div>
							<div class="col-md-6">
								<a href="<?php echo e(route('catalogs.catalog.tovar.table', ['catalog' => $catalog_one->slug, 'tovar' => $child_one->slug, 'table' => $tovar->slug])); ?>"><?php echo e($tovar->title); ?></a>
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
		<?php echo e($tovars->links('partials.paginate')); ?>

	</div>
</div>

<?php echo $__env->make('partials.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/catalogs/show_tovar.blade.php ENDPATH**/ ?>