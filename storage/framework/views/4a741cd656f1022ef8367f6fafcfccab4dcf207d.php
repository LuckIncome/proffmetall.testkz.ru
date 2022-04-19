
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
    <div class="row mb-5">
        <div class="col-lg-9 search_block">
            <form action="<?php echo e(route('search')); ?>" method="get" class="needs-validation" novalidate>
                <input type="text" name="search" placeholder="Поиск по сайту" value="Наименование товара" class="form-control" required>
                <input type="submit" value="" class="search">
            </form>
        </div>
    </div>

    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="row search_element align-items-center">
            <div class="col-3 col-lg-2">
                <a href="<?php echo e(route('catalogs.catalog.tovar.table', ['catalog' => $d->tovar_child->child_catalog->slug, 'tovar' => $d->tovar_child->slug, 'table' => $d->slug])); ?>">
                    <picture>
                        <img src="<?php echo e(Voyager::image($d->image)); ?>" alt="<?php echo e($d->title); ?>">
                    </picture>
                </a>
            </div>
            <div class="col-9 col-lg-8">
                <a href="<?php echo e(route('catalogs.catalog.tovar.table', ['catalog' => $d->tovar_child->child_catalog->slug, 'tovar' => $d->tovar_child->slug, 'table' => $d->slug])); ?>"><?php echo e($d->title); ?></a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p><b>Товар не найден!</b></p>
    <?php endif; ?>

    <div class="row pagination">
        <?php echo e($data->links('partials.paginate')); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/search.blade.php ENDPATH**/ ?>