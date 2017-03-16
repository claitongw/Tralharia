	<h3>Listando Categorias Cadastradas</h3>		        				    
	  <table class="table table-striped table-bordered table-hover table-condensed">
	    <thead>
	      <tr>
	        <th>Código</th>
	        <th>Nome</th>
	      </tr>
	    </thead>
	    
	    <tbody>
		    <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
	      <tr>
	        <td width=100px;><?php echo e($categoria->idcategoria); ?></td>
	        <td><?php echo e($categoria->nome); ?></td>
	      </tr>
			    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	    </tbody>
	  </table>
