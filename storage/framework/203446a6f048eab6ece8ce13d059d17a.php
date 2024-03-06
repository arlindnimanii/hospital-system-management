
    
<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    
<form method="POST" action="<?php echo e(route('sendmail', $data->id)); ?>">

    <?php echo csrf_field(); ?>

    <div class="form-group">
        <label for="greeting">Greeting</label>
        <input type="text" class="form-control" id="greeting" name="greeting" required>
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea type="text" class="form-control" id="body" name="body" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="action_text">Action Text</label>
        <input type="text" class="form-control" id="action_text" name="action_text" required>
    </div>

    <div class="form-group">
        <label for="action_url">Action URL</label>
        <input type="text" class="form-control" id="action_url" name="action_url" required>
    </div>

    <div class="form-group">
        <label for="end_part">End Part</label>
        <textarea type="text" class="form-control" id="end_part" name="end_part" rows="3" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">
        x
    </button>
    <?php echo e(session()->get('message')); ?>

</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Doctors.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/doctors/email_view.blade.php ENDPATH**/ ?>