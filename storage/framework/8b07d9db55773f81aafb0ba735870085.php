

<?php $__env->startSection('title', 'Oral care'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Oral care</h1>
        <a href="<?php echo e(route('products4.create')); ?>" class="btn btn-sm btn-outline-primary">Create</a>
    </div>
    <?php if(Session::get('status')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('status')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if($products4 && count($products4)): ?> 
        <div class="table-responsive">
            <table class="table table-bordred">
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $products4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product4->id); ?></td>
                    <td><?php echo e($product4->name); ?></td>
                    <td><?php echo e($product4->qty); ?></td>
                    <td><?php echo e(number_format($product4->price, 2, "." , "")); ?> EUR</td>
                    <td>
                        <img src="<?php echo e(asset('storage/products4/'.$product4->image)); ?>" alt="<?php echo e($product4->name); ?>" style="height: 90px" />
                    </td>
                    <td>
                        <a href="<?php echo e(route('products4.edit', ['product4' => $product4->id])); ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="<?php echo e(route('products4.destroy', ['product4' => $product4->id])); ?>" class="d-inline" method="POST">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    <?php else: ?> 
        <p>0 products</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/products4/index.blade.php ENDPATH**/ ?>