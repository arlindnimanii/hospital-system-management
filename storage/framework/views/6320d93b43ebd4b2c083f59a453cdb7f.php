

<?php $__env->startSection('admin','Create Category'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Speciality</h1>
        <a href="<?php echo e(route('category.index')); ?>" class="btn btn-sm btn-outline-primary" >Back</a>
    </div>
        <form method="POST" action="<?php echo e(route('category.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/category/create.blade.php ENDPATH**/ ?>