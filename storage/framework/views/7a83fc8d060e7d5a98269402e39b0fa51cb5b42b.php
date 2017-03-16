<?php $__env->startSection('title', 'Listar Marcas'); ?>

<?php $__env->startSection('content'); ?>

<div>
    <h3>Listando Marcas Cadastradas</h3>                                    
     <table class="table table-striped table-bordered table-hover table-condensed">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Nacionalidade</th>
          </tr>
        </thead>
        
        <tbody>
            <?php $__currentLoopData = $marca; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mar): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
          <tr>
            <td width=100px;><?php echo e($mar->idmarca); ?></td>
            <td><?php echo e($mar->nome); ?></td>
            <td><?php echo e($mar->nacionalidade); ?></td>
          </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </tbody>
      </table>
<?php echo e($mar->nacionalidade); ?>

      
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>