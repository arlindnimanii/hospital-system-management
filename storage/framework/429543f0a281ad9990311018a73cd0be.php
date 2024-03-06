

<?php $__env->startSection('title', 'My Appointments'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <h1 class="text-center mb-5">My Appointments</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Cancel Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoints): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($appoints->doctor); ?></td>
                            <td><?php echo e($appoints->date); ?></td>
                            <td><?php echo e($appoints->message); ?></td>
                            <td><?php echo e($appoints->status); ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('are u sure to delete this')" href="<?php echo e(url('cancel_appoint',$appoints->id)); ?>">Cancel Appointment</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/my_appointment.blade.php ENDPATH**/ ?>