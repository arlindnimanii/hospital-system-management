

<?php $__env->startSection('title', 'Edit Product'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Product</h1>
        <a href="<?php echo e(route('products.index')); ?>" class="btn btn-sm btn-outline-primary">Back</a>
    </div>
    <?php if(Session::get('error')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('products.update', ['product' => $product->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="form-group mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($product->name); ?>" />
        </div>
        <div class="form-group mb-2">
            <label for="qty">Qty</label>
            <input type="number" name="qty" id="qty" class="form-control" value="<?php echo e($product->qty); ?>" />
        </div>
        <div class="form-group mb-2">
            <label for="price">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="<?php echo e($product->price); ?>" />
        </div>
        <div class="form-group mb-2">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/products/edit.blade.php ENDPATH**/ ?>