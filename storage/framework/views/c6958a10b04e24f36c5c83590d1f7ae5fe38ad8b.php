<?php if($paginator->hasPages()): ?>

<div class="col text-center">
	<?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
		<?php if(is_array($element)): ?>
			<?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($page == $paginator->currentPage()): ?> 
				<a href="<?php echo e($url); ?>" class="active"><span><?php echo e($page); ?></span></a>
			<?php elseif($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1): ?>
				 <a href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
			<?php endif; ?>
			<?php if($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1): ?>
				...
			<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php endif; ?><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/paginate.blade.php ENDPATH**/ ?>