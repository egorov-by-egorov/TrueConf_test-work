<?php $__env->startSection('titile', 'Main'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Welcome to my App</h1>
    <h3>List of users</h3>
    <ul>
        <li><?php echo e($data); ?></li>



    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/work-test/resources/views/user/user-list.blade.php ENDPATH**/ ?>