<!doctype html>
<html lang="<?php echo e($_SESSION['Settings']['SITE_LANG']); ?>">
    <head>
        <?php echo $__env->make('inc.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </body>
</html>
