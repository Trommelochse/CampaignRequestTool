<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
	<?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<script src="<?php echo asset('js/vendor/jquery.js'); ?>" type="text/javascript"></script>
  	<script src="<?php echo asset('js/vendor/what-input.js'); ?>" type="text/javascript"></script>
  	<script src="<?php echo asset('js/vendor/foundation.js'); ?>" type="text/javascript"></script>
 	<script src="<?php echo asset('js/foundation-datepicker.min.js'); ?>" type="text/javascript"></script>
 	<script src="<?php echo asset('js/main.js'); ?>" type="text/javascript"></script>
  
</body>
</html>