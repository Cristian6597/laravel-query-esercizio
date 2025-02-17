<?php $__env->startSection('content'); ?>
    <h1 class="mb-4 text-4xl font-bold">Insert Book</h1>
    <form action="<?php echo e(route('book.store')); ?>" method="post"> 
        <?php echo csrf_field(); ?> 
        <div class="flex flex-col gap-2">
            <label for="name">Book Title:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="text" name="title">
            <label for="email">Author ID:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="text" name="author_id">
            <label for="password">Publish date:</label>
            <input class="border border-black border-solid rounded-[100px] ps-2" type="date" name="publish_date">
            <button class="shadow-md bg-black p-2 rounded-[100px] text-white w-1/3 mt-2" type="submit">Invia</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cristian\Herd\lezione-2\resources\views/pages/biblioteca/createbook.blade.php ENDPATH**/ ?>