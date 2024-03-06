
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
      <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="item">
          <div class="card-doctor">
            <div class="header">
            <img src="<?php echo e(asset('storage/doctors/' .$doctor->image)); ?>"alt="<?php echo e($doctor->name); ?>" style="height:90px"/>
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0"><?php echo e($doctor->name); ?></p>
              <span class="text-sm text-grey"><?php echo e($doctor->speciality); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      </div>
    </div>
  </div><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/doctorview.blade.php ENDPATH**/ ?>