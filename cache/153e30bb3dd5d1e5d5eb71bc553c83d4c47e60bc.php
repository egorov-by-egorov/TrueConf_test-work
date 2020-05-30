<?php $__env->startSection('title', 'Add user'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Add User</h1>
    <form action="">
        <label for="user__name">User Name</label>
        <input id="user__name" type="text" name="user-name">
        <button type="submit">Add</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/work-test/resources/views/user/user-add.blade.php ENDPATH**/ ?>