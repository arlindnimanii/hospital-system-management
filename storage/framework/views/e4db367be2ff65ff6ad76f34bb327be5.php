
    
    <?php $__env->startSection('title','Contact'); ?>

    <?php $__env->startSection('content'); ?>
    
<body>
<div class="about-us py-5">
    <div class="container">
        <h2>Na kontaktoni</h2>
        <p>Përmes ueb formularit në vijim mund të na kontaktoni për çdo pyetje, këshillë, apo kritikë.</p>
        <form action="#" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="emri">Emri:</label>
                <input type="text" class="form-control" id="emri" placeholder="Shkruani emrin tuaj" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email-i:</label>
                <input type="email" class="form-control" id="email" placeholder="Shkruani email-in tuaj" name="email" required>
            </div>
            <div class="form-group">
                <label for="tema">Tema:</label>
                <input type="text" class="form-control" id="tema" placeholder="Shkruani temën e mesazhit tuaj" name="subject" required>
            </div>
            <div class="form-group">
                <label for="mesazhi">Mesazhi:</label>
                <textarea class="form-control" rows="5" id="mesazhi" placeholder="Shkruani mesazhin tuaj" name="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Dërgo</button>
        </form>        
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\Desktop\Hospital\resources\views/user/contact.blade.php ENDPATH**/ ?>