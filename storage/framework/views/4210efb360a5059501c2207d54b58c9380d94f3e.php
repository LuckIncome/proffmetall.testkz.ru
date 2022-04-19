
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
    <div class="row align-items-center">
        <div class="col-lg-8 map">
            <?php echo $map->value; ?>

        </div>
        <div class="col-lg-4 otz mt-5 mt-lg-0">
        	<span class="phone_contacts">
                <?php $__currentLoopData = $phone_with_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pwn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="tel:<?php echo e(preg_replace("/[^,.0-9]/", '', $pwn->link)); ?>"><?php echo e($pwn->value); ?></a> <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
            <span class="email_contacts">
                <a href="mailto:<?php echo e($email->value); ?>"><?php echo e($email->value); ?></a>
            </span>
            <span class="location_contacts">
                <?php echo e($adress->value); ?>

            </span>
            <span class="soc_contacts">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($social->link); ?>" target="_blank">
                        <picture>
                            <img src="<?php echo e(Voyager::image($social->icon)); ?>" alt="<?php echo e($social->value); ?>">
                        </picture>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </span>
            <a href="#" class="send send_contacts" data-bs-toggle="modal" data-bs-target="#message">Пишите нам</a>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/contacts.blade.php ENDPATH**/ ?>