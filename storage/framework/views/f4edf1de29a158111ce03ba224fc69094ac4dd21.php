
<?php $__env->startSection('page_title',(strlen($page->title) > 1 ? $page->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($page->seo_title) > 1 ? $page->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($page->meta_keywords) > 1 ? $page->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($page->meta_description) > 1 ? $page->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-3 d-none d-lg-block">
			<div class="catalog_list_block">
				<div class="catalog_list">
					<ul>						
						<?php $__currentLoopData = $title_catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title_catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a href="<?php echo e(route('catalogs.catalog', ['catalog' => $title_catalog->slug])); ?>"><?php echo e($title_catalog->title); ?></a>
								<ul>
									<?php $__currentLoopData = $title_catalog->child; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
											<li><a href="<?php echo e(route('catalogs.catalog.tovar', ['catalog' => $title_catalog->slug, 'tovar' => $child->slug])); ?>"><?php echo e($child->title); ?></a></li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					</ul>	
				</div>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="owl-carousel owl-carousel2 owl-theme">
				
				<?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="item">
						<picture>
							<img src="<?php echo e(Voyager::image($slider->image)); ?>" alt="<?php echo e($slider->title); ?>">
						</picture>
						<div class="container-fluid">
							<div class="row align-items-end">
								<div class="col text-center text-lg-start">
									<h1><?php echo e($slider->title); ?></h1>
									<h4><?php echo e($slider->sub_title); ?></h4>
									<a href="<?php echo e($slider->link); ?>">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">

		<?php $__currentLoopData = $advantages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advantage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>			
			<div class="col-6 col-lg-4">
				<div class="benefit">
					<div class="container-fluid">
						<div class="row align-items-center text-center text-sm-start">
							<div class="col-sm-3">
								<picture>
									<img src="<?php echo e(Voyager::image($advantage->image)); ?>" alt="<?php echo e($advantage->title); ?>">
								</picture>
							</div>
							<div class="col-sm-9">
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
			<h2>Каталог продукции</h2>
		</div>

		<?php $__currentLoopData = $catalogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
		<div class="col-12 text-center more">
			<a href="<?php echo e(route('catalogs')); ?>">Перейти в каталог</a>
		</div>
	</div>
</div>
<div class="container about_main">
	<div class="row">
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
			<b>О компании</b>
			<?php echo $about->first_content; ?>

			<a href="/about" class="about_more">Подробнее о компании</a>
		</div>
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

<div class="container mt-5">
	<div class="row align-items-center">
		<div class="col-lg-6 text-center text-lg-start zag2 order-1 order-lg-1">
			<h2>Полезная информация</h2>
		</div>
		<div class="col-lg-6 text-center text-lg-end order-3 order-lg-2 mt-3 mt-lg-0">
			<a href="/articles" class="blog">Все статьи</a>
		</div>
		<div class="col-12 order-2 order-lg-3">
			<div class="owl-carousel owl-carousel4 owl-theme">
				<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-md-6">
								<a href="<?php echo e(route('articles.show', ['article' => $article->slug])); ?>">
									<picture>
										<img src="<?php echo e($article->SmallThumb); ?>" alt="<?php echo e($article->title); ?>">
									</picture>
								</a>
							</div>
							<div class="col-md-6">
								<span><?php echo e(date('d-m-Y', strtotime($article->created_at))); ?></span>
								<a href="<?php echo e(route('articles.show', ['article' => $article->slug])); ?>"><?php echo e(\Illuminate\Support\Str::limit($article->title, 75,'...')); ?></a>
								<br>
							    <?php echo \Illuminate\Support\Str::limit(strip_tags($article->first_content), 100,'...'); ?>

							</div>
						</div>
					</div>
				</div>
			     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/home.blade.php ENDPATH**/ ?>