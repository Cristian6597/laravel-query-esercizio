
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('users.store')); ?>" method="post">
        <h1>Crea utente</h1>
        <?php echo csrf_field(); ?>
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="text" name="name">
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="email" name="email">
        <input class="border border-black border-solid rounded-lg placeholder:text-gray-100" type="password" name="password">
        <button class="bg-blue-500" type="submit">Invia</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cristian\Herd\lezione-2\resources\views/pages/users/create.blade.php ENDPATH**/ ?>