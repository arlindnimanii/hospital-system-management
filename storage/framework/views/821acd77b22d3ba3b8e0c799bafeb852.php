
    
    <?php $__env->startSection('title','vitaminsandsupplements'); ?>

    <?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item d-inline-block ml-3 py-3">
    <div class="card-doctor">
        <div class="header">
            <img src="<?php echo e(asset('storage/products/' .$products->image)); ?>" alt="<?php echo e($products->name); ?>" style="height:300px"/>
        </div>
        <div class="body">
            <p class="text-xl mb-0"><?php echo e($products->name); ?></p>
            <span class="text-sm text-grey"><?php echo e($products->category); ?></span>
        </div>
        <div class="footer">
            <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>
</div>
        
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/vitaminsandsupplements.blade.php ENDPATH**/ ?>