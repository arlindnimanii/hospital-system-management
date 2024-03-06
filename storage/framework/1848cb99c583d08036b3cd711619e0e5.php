
    
<?php $__env->startSection('title','Appointments'); ?>

<?php $__env->startSection('content'); ?>
    
<div class="container py-5">
    <h1 class="text-center mb-5">My Appointments</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Customer name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Docotor name </th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Approved</th>
                    <th>Canceled</th>
                    <th>Send Mail</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($appoint->name); ?></td>
                    <td><?php echo e($appoint->email); ?></td>
                    <td><?php echo e($appoint->phone); ?></td>
                    <td><?php echo e($appoint->doctor); ?></td>
                    <td><?php echo e($appoint->date); ?></td>
                    <td><?php echo e($appoint->message); ?></td>
                    <td><?php echo e($appoint->status); ?></td>
                    <td>
                        <a class="btn btn-success" href="<?php echo e(url('approved',$appoint->id)); ?>">Approved</a>    
                    </td>
                    <td>
                        <a class="btn btn-danger" href="<?php echo e(url('canceled',$appoint->id)); ?>">Canceled</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(url('emailview',$appoint->id)); ?>">Send Mail</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Doctors.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/doctors/showappointment.blade.php ENDPATH**/ ?>