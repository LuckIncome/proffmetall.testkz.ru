
<?php $__env->startSection('page_title',(strlen($article_one->title) > 1 ? $article_one->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($article_one->seo_title) > 1 ? $article_one->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($article_one->meta_keywords) > 1 ? $article_one->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($article_one->meta_description) > 1 ? $article_one->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container inner_zag">
    <div class="row">

        <?php echo $__env->make('partials.breadcrumbs', [
            'second_link' => '/articles',
            'second_title' => 'Полезная информация',
            'child_title' => $article_one->title
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="col-12">
            <h1><?php echo e($article_one->title); ?></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 article_image">
            <a href="<?php echo e(Voyager::image($article_one->image)); ?>" data-fancybox="article">
                <picture>
                    <img src="<?php echo e($article_one->BigThumb); ?>" alt="<?php echo e($article_one->title); ?>">
                </picture>
            </a>
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 article_text">
            <span class="date"><?php echo e(date('d-m-Y', strtotime($article_one->created_at))); ?></span>
            <?php echo $article_one->first_content; ?>

        </div>
        <div class="col-12">
            <?php echo $article_one->second_content; ?>

        </div>
    </div>
    <div class="row autor">
        <div class="col-md-6 text-md-start text-center">
            <script src="https://yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,whatsapp,moimir"></div>
        </div>
        <div class="col-md-6 text-md-end text-center mt-2 mt-md-0">
            Автор: <b><?php echo e($article_one->author); ?></b>
        </div>
    </div>
</div>

<?php echo $__env->make('partials.news', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/articles/show.blade.php ENDPATH**/ ?>