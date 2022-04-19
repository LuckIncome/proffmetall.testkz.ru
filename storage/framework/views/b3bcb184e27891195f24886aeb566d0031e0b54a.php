
<?php $__env->startSection('page_title',(strlen($tovar->title) > 1 ? $tovar->title : '')); ?>
<?php $__env->startSection('seo_title', (strlen($tovar->seo_title) > 1 ? $tovar->seo_title : '')); ?>
<?php $__env->startSection('meta_keywords',(strlen($tovar->meta_keywords) > 1 ? $tovar->meta_keywords : '')); ?>
<?php $__env->startSection('meta_description', (strlen($tovar->meta_description) > 1 ? $tovar->meta_description : '')); ?>
<?php $__env->startSection('image',''); ?>
<?php $__env->startSection('url',url()->current()); ?>
<?php $__env->startSection('page_class','page'); ?>
<?php $__env->startSection('content'); ?>

<div class="container inner_zag">
    <div class="row">
        <?php echo $__env->make('partials.breadcrumbs', [
            'second_link' => '/catalogs',
            'second_title' => 'Каталог',
            'third_link' => '/catalogs/'.$catalog_one->slug,
            'child_title' => $catalog_one->title,
            'fourth_link' => '/catalogs/'.$catalog_one->slug.'/'.$child_one->slug,
            'child_title_1' => $child_one->title,
            'child_title_2' => $tovar->title,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-12">
            <h1><?php echo e($tovar->title); ?></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table_sort">
                    <thead>
                        <tr>
                            <?php if($table->product): ?>
                                <th class="sort_start">Продукт</th>
                            <?php endif; ?>
                            <?php if($table->mark): ?>
                                <th class="sort_start">Марка</th>
                            <?php endif; ?>
                            <?php if($table->size): ?>
                                <th class="sort_start">Размер</th>
                            <?php endif; ?>
                            <?php if($table->length): ?>
                                <th class="sort_start">Длина</th>
                            <?php endif; ?>
                            <?php if($table->diameter): ?>
                                <th class="sort_start">Диаметр,мм</th>
                            <?php endif; ?>
                            <?php if($table->thickness): ?>
                                <th class="sort_start">Толщина,мм</th>
                            <?php endif; ?>
                            <?php if($table->gost): ?>
                                <th class="sort_start">ГОСТ, ОСТ, ТУ</th>
                            <?php endif; ?>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php $__empty_1 = true; $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
	                        <tr>
	                            <?php if($table->product): ?>
	                                <td><b><?php echo e($table->product); ?></b></td>
	                            <?php endif; ?>
	                            <?php if($table->mark): ?>
	                                <td><?php echo e($table->mark); ?></td>
	                            <?php endif; ?>
	                            <?php if($table->size): ?>
	                                <td><?php echo e($table->size); ?></td>
	                            <?php endif; ?>
	                            <?php if($table->length): ?>
                                    <td><?php echo e($table->length); ?></td>
                                <?php endif; ?>
                                <?php if($table->diameter): ?>
                                    <td><?php echo e($table->diameter); ?></td>
                                <?php endif; ?>
                                <?php if($table->thickness): ?>
                                    <td><?php echo e($table->thickness); ?></td>
                                <?php endif; ?>
                                <?php if($table->gost): ?>
	                                <td><?php echo e($table->gost); ?></td>
	                            <?php endif; ?>
	                        </tr>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
	                    	<tr>
								<td><p><b>Продукт еще не загружен!</b></p></td>
								<td><p><b>Продукт еще не загружен!</b></p></td>
	                            <td><p><b>Продукт еще не загружен!</b></p></td>
	                            <td><p><b>Продукт еще не загружен!</b></p></td>
							</tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row pagination">
				<?php echo e($tables->links('partials.paginate')); ?>

			</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/pages/catalogs/show_tovar_table.blade.php ENDPATH**/ ?>