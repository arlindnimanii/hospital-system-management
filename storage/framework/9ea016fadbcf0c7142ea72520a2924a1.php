

<?php $__env->startSection('title', 'Pain relief'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Pain relief</h1>
        <a href="<?php echo e(route('product4s.create')); ?>" class="btn btn-sm btn-outline-primary">Create</a>
    </div>
    <?php if(Session::get('status')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('status')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <?php if($product4s && count($product4s)): ?> 
        <div class="table-responsive">
            <table class="table table-bordred">
                <tr>
                    <th>#</th>
                    <th>Product4</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $product4s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product4->id); ?></td>
                    <td><?php echo e($product4->name); ?></td>
                    <td><?php echo e($product4->qty); ?></td>
                    <td><?php echo e(number_format($product4->price, 2, "." , "")); ?> EUR</td>
                    <td>
                        <img src="<?php echo e(asset('storage/products4/'.$product4->image)); ?>" alt="<?php echo e($product4->name); ?>" style="height: 90px" />
                    </td>
                    <td>
                        <a href="<?php echo e(route('product4s.edit', ['product4' => $product4->id])); ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="<?php echo e(route('product4s.destroy', ['product4' => $product4->id])); ?>" class="d-inline" method="POST">
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

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/product4s/index.blade.php ENDPATH**/ ?>