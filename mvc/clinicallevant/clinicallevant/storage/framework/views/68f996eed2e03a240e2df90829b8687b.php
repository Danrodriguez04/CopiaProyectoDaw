<!-- //desde nuestra plantilla cita cambiamos el contenido que queremos cambiar-->
<?php $__env->startSection('title', 'Lista de citas'); ?>
<?php $__env->startSection('content'); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cita', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clinica/clinicallevant/resources/views/layouts/cita/showcita.blade.php ENDPATH**/ ?>