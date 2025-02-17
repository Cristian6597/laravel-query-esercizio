

<?php $__env->startSection('content'); ?>
    <div class="top-part ">
        <h1 class="text-3xl font-bold text-center">
            Book Info
        </h1>
    </div>
    <div class="mt-5 text-center middle-part">
        <ul>
            <li>
                <div class="div">
                    <p>Title: <?php echo e($book->title); ?></p>
                    <p>Author ID: <?php echo e($book->author_id); ?></p>
                    <p>Publish Date: <?php echo e($book->publish_date); ?></p>
                </div>
            </li>

        </ul>
    </div>
    <div class="mt-5 font-bold text-center text-white bg-black border border-black back-btn">

        <a href="<?php echo e(url ("/")); ?>">Back</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Cristian\Herd\lezione-2\resources\views/pages/biblioteca/single-book.blade.php ENDPATH**/ ?>