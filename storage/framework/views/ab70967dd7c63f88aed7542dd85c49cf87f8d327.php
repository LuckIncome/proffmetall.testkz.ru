<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start zag2">
            <h2>Читайте также</h2>
        </div>
        <div class="col-12">
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
                                    <!--<?php echo \Illuminate\Support\Str::limit($article->first_content, 157,'...'); ?>--> <br>    
                                    <?php echo \Illuminate\Support\Str::limit(strip_tags($article->first_content), 100,'...'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
</div>  <?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/news.blade.php ENDPATH**/ ?>