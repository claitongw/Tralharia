<?php $__env->startSection('title', 'Listar Promoções'); ?>

<?php $__env->startSection('content'); ?>

<div>
    <h3>Listando Promoções Cadastradas</h3>                                    

<?php $__currentLoopData = $promo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prom): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
  <?php echo e($prom->nome); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?> 
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>