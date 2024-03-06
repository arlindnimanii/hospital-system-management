
    
    <?php $__env->startSection('title','coldandflu'); ?>

    <?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item d-inline-block ml-3 py-3">
                <div class="card-doctor">
                    <div class="header">
                    <img src="<?php echo e(asset('storage/doctors/' .$doctors->image)); ?>"alt="<?php echo e($doctors->name); ?>" style="height:300px"/>
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0"><?php echo e($doctors->name); ?></p>
                        <span class="text-sm text-grey"><?php echo e($doctors->speciality); ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>//duhet me bo ni button view doxtorr ose me ja shtu naj pershkrim najsen edhe ktu edhe te nurses e kom marr codin copy paste duhet me bo sikur anej me contenta
    
    <?php $__env->stopSection(); ?>
        
        
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/showdoctors.blade.php ENDPATH**/ ?>