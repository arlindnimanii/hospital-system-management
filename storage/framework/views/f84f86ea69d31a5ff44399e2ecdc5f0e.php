
    
    <?php $__env->startSection('admin','Edit Category'); ?>

    <?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Doctor</h1>
        <a href="<?php echo e(route('category.index')); ?>" class="btn btn-sm btn-outline-primary" >Create</a>
    </div>
    <?php if(Session::get('error')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('category.update', ['category' => $category->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>    
    <?php echo csrf_field(); ?>
    <div class="form-group mb-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo e($category->name); ?>"/>
    </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/category/edit.blade.php ENDPATH**/ ?>