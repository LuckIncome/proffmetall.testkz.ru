
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
        
        <?php $__empty_1 = true; $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	        <div class="col-lg-6">
	            <div class="article">
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
	                            <!--<?php echo \Illuminate\Support\Str::limit($article->first_content, 157,'...'); ?>-->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<p><b>Новость еще не загружен!</b></p>
		<?php endif; ?>
     
    </div>
    <div class="row pagination blog_pagination">
        <?php echo e($articles->links('partials.paginate')); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/articles/index.blade.php ENDPATH**/ ?>