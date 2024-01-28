<!--// No olvidar que para que las rutas puedan utilizar esta vista debemos saber que es parte de una plantilla, es un subdirectorio de la carpeta views-->




<!-- //desde nuestra plantilla cita cambiamos el contenido que queremos cambiar-->
<?php $__env->startSection('title', 'Elige tu cita'); ?>
<?php $__env->startSection('page'); ?>
    <h1>SOLICITA TU CITA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<form class="d-flex flex-column  w-75 p-5 row-gap-3 " method="POST" action="<?php echo e(route('create')); ?>">
    <?php echo csrf_field(); ?>
    <div class="row mb-3 ">
        <label class="text-center">FORMATO DE LA CITA</label>
    <?php $__currentLoopData = $formatoCita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="radio" class="btn-check  " id="<?php echo e($formato->codigo_traduccion); ?>" value="<?php echo e($formato->id); ?>" name="tipocita" required>
        <label class="btn btn-outline-primary col-sm-3" for="<?php echo e($formato->codigo_traduccion); ?>"><?php echo e($formato->codigo_traduccion); ?></label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <label class="align-self-center w-75 text-center">ESPECIALIDAD:
    <select name="especialidad" class="form-select align-self-center border border-dark" aria-label="Default select example">
    <?php $__currentLoopData = $especialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($especialidad->id); ?>"><?php echo e($especialidad->codigo_traduccion); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </label>

    <label class="d-flex justify-content-evenly ">SELECCIONA LA FECHA:
        <input type="text" id="datepicker" name="fecha" placeholder="dd-mm-aaaa" >
    </label>

    <input type="submit" value="SOLICITAR CITA" class="btn btn-secondary">

</form>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.cita', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/clinica/clinicallevant/resources/views/layouts/cita/solicitarcita.blade.php ENDPATH**/ ?>