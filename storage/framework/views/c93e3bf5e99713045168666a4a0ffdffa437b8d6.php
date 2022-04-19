
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
<div class="container about_main">
	<div class="row align-items-center">
		<div class="col-lg-6">
		    <?php if($about->first_video): ?>
    			<?php $__currentLoopData = json_decode($about->first_video); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <video style="width:100%;height:100%;" no-controls autoplay loop playsinline muted>
                    <source src="<?php echo e(Voyager::image($video->download_link)); ?>"  type='video/mp4'>
                </video>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <picture>
			        <img src="<?php echo e(Voyager::image($about->first_image)); ?>" alt="О компании">
			    </picture>
            <?php endif; ?>
		</div>
		<div class="col-lg-6">
			<?php echo $about->first_content; ?>

		</div>
	</div>
</div>
<div class="container-fluid about_inner_2">
	<div class="container about_main">
		<div class="row align-items-center">
			<div class="col-lg-6 order-2 order-lg-1">
				<?php echo $about->second_content; ?>

			</div>
			<div class="col-lg-6 order-1 order-lg-2">
				<picture>
					<img src="<?php echo e(Voyager::image($about->second_image)); ?>" alt="О компании">
				</picture>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-12 zag text-center">
			<h1>Благодарственные письма</h1>
		</div>
		<div class="col-12">
			<div class="owl-carousel owl-carousel5 owl-theme">
				
				<?php $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item">
						<a href="<?php echo e(Voyager::image($certificate->image)); ?>" data-fancybox="blag">
							<picture>
								<img src="<?php echo e(Voyager::image($certificate->image)); ?>" alt="<?php echo e($certificate->alt); ?>">
							</picture>
						</a>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			
			</div>
		</div>
	</div>
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
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/about.blade.php ENDPATH**/ ?>