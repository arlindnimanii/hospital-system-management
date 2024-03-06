
    
    
    
    <?php $__env->startSection('admin','Create Doctor'); ?>

    <?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create Doctor</h1>
        <a href="<?php echo e(route('doctors.index')); ?>" class="btn btn-sm btn-outline-primary" >Back</a>
    </div>
    <?php if(Session::get('error')): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo e(Session::get('error')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('doctors.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group mb-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control"/>
    </div>
    <div class="form-group mb-2">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone" class="form-control"/>
    </div>
    
    <?php echo csrf_field(); ?>
    <div class="form-group mb-2">
    <label for="speciality">Speciality</label>
    <select name="speciality" id="speciality" class="form-control">
        <option value="">Select a speciality</option>
        <?php $__currentLoopData = DB::table('Specialities')->select('id', 'name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $speciality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($speciality->name); ?>"><?php echo e($speciality->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>



    <div class="form-group mb-2">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control"/>
    </div>
    <button type="submit" class="btn btn-sm btn-outline-secondary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/doctors/create.blade.php ENDPATH**/ ?>