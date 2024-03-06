

<?php $__env->startSection('title', 'My Appointments'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container py-5">
        <h1 class="text-center mb-5">My Contacts</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Emri</th>
                        <th>Mbiemri</th>
                        <th>Email-i</th>
                        <th>Tema</th>
                        <th>Mesazhi</th>
                        <th>Cancel Appointment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($contacts->emri); ?></td>
                            <td><?php echo e($contacts->mbiemri); ?></td>
                            <td><?php echo e($contacts->emaili); ?></td>
                            <td><?php echo e($contacts->tema); ?></td>
                            <td><?php echo e($contacts->mesazhi); ?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('are u sure to delete this')" href="<?php echo e(url('cancel_contact',$contacts->id)); ?>">Cancel Contact</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/my_contact.blade.php ENDPATH**/ ?>