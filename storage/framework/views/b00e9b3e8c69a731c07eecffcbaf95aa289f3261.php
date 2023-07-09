<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts.partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" /> -->
</head>

<body style='direction:rtl'>

    <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="mainContainer">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH /Users/mac5k/www/qu/sum6/resources/views/layouts/master.blade.php ENDPATH**/ ?>