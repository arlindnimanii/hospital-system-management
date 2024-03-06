
    
<?php $__env->startSection('title','Contacts'); ?>

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
                        <th>Send Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contacts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($contacts->emri); ?></td>
                            <td><?php echo e($contacts->mbiemri); ?></td>
                            <td><?php echo e($contacts->emaili); ?></td>
                            <td><?php echo e($contacts->tema); ?></td>
                            <td><?php echo e($contacts->mesazhi); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo e(url('emailview',$contacts->id)); ?>">Send Mail</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/admin/showcontact.blade.php ENDPATH**/ ?>