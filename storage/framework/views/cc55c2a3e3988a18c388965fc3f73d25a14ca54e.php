
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
        <div class="col-lg-7">
            <div class="accordion accordion-flush" id="accordionFlushExample">
               
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading<?php echo e($faq->id); ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo e($faq->id); ?>" aria-expanded="false">
                                <?php echo e($faq->question); ?>

                            </button>
                        </h2>
                        <div id="flush-collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo e($faq->id); ?>" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                            	<?php echo $faq->answer; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 otz mt-5 mt-lg-0">
        	<span>Не нашли ответ?</span>
        	<b>Задайте свой вопрос!</b>
            <form id="question_form" action="<?php echo e(route('question')); ?>" method="post" class="needs-validation" novalidate>
            	<input type="text" name="name" placeholder="Ваше имя" class="form-control" required>
            	<input type="text" name="email" placeholder="Ваш E-mail" class="form-control" required>
            	<textarea name="question" placeholder="Ваш вопрос" class="form-control" required></textarea>
                <input type="hidden" name="url" value="<?php echo e(url()->current()); ?>">
            	<input type="submit" value="Отправить" class="send">
            </form>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/faq.blade.php ENDPATH**/ ?>