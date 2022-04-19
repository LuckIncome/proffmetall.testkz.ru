
<?php $__env->startSection('page_title', __('Страница не найдена')); ?>
<?php $__env->startSection('seo_title',  __('Страница не найдена')); ?>
<?php $__env->startSection('meta_keywords', __('Страница не найдена')); ?>
<?php $__env->startSection('meta_description',  __('Страница не найдена')); ?>
<?php $__env->startSection('image', ''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container inner_zag">
    <div class="row">
        <div class="col-12">

        	<?php echo $__env->make('partials.breadcrumbs', ['title' => 'Страница не найдена'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <div class="col-12">
            <h1>Страница не найдена</h1>
        </div>
    </div>
</div>
<div class="container thank">
    <div class="row">
        <div class="col text-center">
            <picture>
                <img src="<?php echo e(asset('assets/img/404.svg')); ?>" alt="404">
            </picture>
            <h2>Запрашиваемая Вами страница не найдена</h2>
            <h3>Попробуйте вернуться на главную и повторить поиск</h3>
            <a href="/">Вернуться на главную</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/errors/404.blade.php ENDPATH**/ ?>