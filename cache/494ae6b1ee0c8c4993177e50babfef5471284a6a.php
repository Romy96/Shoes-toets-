<?php $__env->startSection('content'); ?>


<h1>Shoe brands</h1>

<div class="container">
	<div class="row">
        <div class="col-md-6">
    		<h2>Search</h2>
    		<form method="get" action="index.php">
	            <div id="custom-search-input">
	                <div class="input-group col-md-12">
	                    <input type="text" name="shoe_brand" id="shoe_brand" class="form-control input-lg" placeholder="insert shoe brand here" />
		                    <span class="input-group-btn">
		                        <button class="btn btn-info btn-lg" type="submit">
		                            <i class="glyphicon glyphicon-search"></i>
		                        </button>
		                    </span>
	                </div>
	            </div>
            </form>
        </div>
	</div>
</div>

<div class="table-responsive">
  <table class="table">
  		<thead>
	    	<tr>
	    		<th><a href="index.php">Shoe brand</a></th>
	    		<th>Shoe size</th>
	    		<th>Amount of size</th>
	    		<th></th>
	    	</tr>
    	</thead>
    	<tbody>
			<?php if(isset($shoes)): ?>
				<?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
					<tr>
						<td>
							<?php echo e($row['shoe_brand']); ?>

						</td>
						<td>
							<?php echo e($row['shoe_size']); ?>

						</td>
						<td>
							<?php echo e($row['amount_of_size']); ?>

						</td>
						<td>
                            <div class="btn-group">
                            	<a href="edit.php?id=<?php echo e($row['id']); ?>">Edit</a>
                                <a href="delete_action.php?id=<?php echo e($row['id']); ?>" onclick="return confirm('Weet je het zeker?')">Delete</a>
                            </div>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			<?php endif; ?>
		</tbody>
  </table>

  							<?php if(isset($shoe_sizes)): ?>
	  							<form method="post" action="index.php">
				                    <div class="input-group">
					                    <div class="dropdown">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Shoe sizes
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
										  	<?php $__currentLoopData = $shoe_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row_2): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
										    	<li><a href="index.php"><?php echo e($row_2['shoe_size']); ?></a></li>
										    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
										  </ul>
										</div>
									</div>
								</form>
							<?php endif; ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>