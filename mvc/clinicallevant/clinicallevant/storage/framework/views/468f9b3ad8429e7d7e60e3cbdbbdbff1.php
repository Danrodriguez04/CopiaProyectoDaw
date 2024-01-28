<!--// No olvidar que para que las rutas puedan utilizar esta vista debemos saber que es parte de una plantilla, es un subdirectorio de la carpeta views-->




<!-- //desde nuestra plantilla cita cambiamos el contenido que queremos cambiar-->
<?php $__env->startSection('title', 'Elige tu cita'); ?>
<?php $__env->startSection('content'); ?>
<h1>¿Que tipo de cita quieres?</h1>


<?php $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container">
         <a><?php echo e($cita->codigo_traduccion); ?></a>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div>

</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.cita', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clinica/clinicallevant/resources/views/layouts/cita/tipocita.blade.php ENDPATH**/ ?>