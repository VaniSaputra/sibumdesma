<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div>
	<?php if(session('pesanwarning')): ?>
		<div class="container">
			<div class="row">
				<div class="alert alert-success">
				    <?php echo e(session('pesanwarning')); ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php echo $__env->yieldContent('content'); ?>
</div>
  

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sistembumdes\resources\views/layout/master.blade.php ENDPATH**/ ?>