<div class="col-12">
	<ul>
		<?php if(isset($child_title)): ?>
			<?php if(isset($child_title_1)): ?>
				<?php if(isset($child_title_2)): ?>
					<li><a href="/">Главная</a></li>
					<li><a href="<?php echo e($second_link); ?>"><?php echo e($second_title); ?></a></li>
					<li><a href="<?php echo e($third_link); ?>"><?php echo e($child_title); ?></a></li>
					<li><a href="<?php echo e($fourth_link); ?>"><?php echo e($child_title_1); ?></a></li>
					<li><?php echo e($child_title_2); ?></li>
				<?php else: ?>
					<li><a href="/">Главная</a></li>
					<li><a href="<?php echo e($second_link); ?>"><?php echo e($second_title); ?></a></li>
					<li><a href="<?php echo e($third_link); ?>"><?php echo e($child_title); ?></a></li>
					<li><?php echo e($child_title_1); ?></li>
				<?php endif; ?>
			<?php else: ?>
				<li><a href="/">Главная</a></li>
	            <li><a href="<?php echo e($second_link); ?>"><?php echo e($second_title); ?></a></li>
	            <li><?php echo e($child_title); ?></li>
            <?php endif; ?>
		<?php else: ?>
			<li><a href="/">Главная</a></li>
			<li><?php echo e($title); ?></li>
		<?php endif; ?>
	</ul>
</div><?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/partials/breadcrumbs.blade.php ENDPATH**/ ?>