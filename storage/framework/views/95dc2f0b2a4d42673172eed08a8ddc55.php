

<?php $__env->startSection('content'); ?>
<div class="top-part ">
    <h1 class="text-3xl font-bold text-center">
        Books List
    </h1>
</div>
<div class="mt-5 text-center middle-part">
    <ul>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="div">
                    <a href="<?php echo e(url('/book/' . $book->id)); ?>">Book Name : <?php echo e($book->title); ?></a>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<div class="mt-5 font-bold text-center text-white bg-black border border-black back-btn">
    <a href="/users/create">Add Book</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cristian\Herd\lezione-2\resources\views/pages/biblioteca/books.blade.php ENDPATH**/ ?>