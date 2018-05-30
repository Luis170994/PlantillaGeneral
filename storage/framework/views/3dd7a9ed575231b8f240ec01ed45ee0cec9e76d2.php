<?php $__env->startSection('title','Plantilla General'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Bienvenido</h2>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>