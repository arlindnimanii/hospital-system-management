
    
    
    
    <?php $__env->startSection('admin','Create Nurse'); ?>

    <?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Nurse</h1>
        <a href="<?php echo e(route('nurses.index')); ?>" class="btn btn-sm btn-outline-primary" >Back</a>
    </div>
    <?php if(Session::get('error')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('nurses.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group mb-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control"/>
    </div>
    <div class="form-group mb-2">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone" class="form-control"/>
    </div>
    <div class="form-group mb-2">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control"/>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/nurses/create.blade.php ENDPATH**/ ?>