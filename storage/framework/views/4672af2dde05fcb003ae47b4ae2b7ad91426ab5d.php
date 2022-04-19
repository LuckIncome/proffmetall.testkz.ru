
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

        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-lg-3">
                <div class="partner">
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
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
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
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start zag2 order-1 order-lg-1">
            <h2>Полезная информация</h2>
        </div>
        <div class="col-lg-6 text-center text-lg-end order-3 order-lg-2 mt-3 mt-lg-0">
            <a href="#" class="blog">Все статьи</a>
        </div>
        <div class="col-12 order-2 order-lg-3">
            <div class="owl-carousel owl-carousel4 owl-theme">
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="<?php echo e(asset('assets/img/article1.png')); ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="<?php echo e(asset('assets/img/article2.png')); ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="<?php echo e(asset('assets/img/article1.png')); ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="#">
                                    <picture>
                                        <img src="<?php echo e(asset('assets/img/article2.png')); ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <span>5 Февраля 2022</span>
                                <a href="#">Вопросы относительно рынка металлов в Средней Азии</a>
                                <p>В Казахстане быстрыми темпами развивается металлургическая отрасль, и на этом основании очередную научно-практическую конференцию, посвященную вопросам рынка ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/partners.blade.php ENDPATH**/ ?>