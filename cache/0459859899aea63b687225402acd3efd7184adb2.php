<?php $__env->startSection('content'); ?>

<?php if(isset($shoe)): ?>
<?php $__currentLoopData = $shoe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

<h1>Edit</h1>

 <div class="row">
        <form role="form" method="post" action="edit_action.php">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">   <!-- white background -->
                        <div class="box-body">      <!-- some whitespace -->
                            <div class="box-body">  
                                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                                <div class="form-group">
                                    <label for="brand">Shoe brand:</label>
                                    <div class="input-group">
                                    	<input type="hidden" name="id" value="<?php echo e($row['id']); ?>">
                                        <input type="text" class="form-control" id="brand" name="brand"  value="<?php echo e($row['shoe_brand']); ?>" required>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="size">Shoe size:</label>
                                     <div class="input-group">
                                        <input type="number" class="form-control" data-slug="source" value="<?php echo e($row['shoe_size']); ?>" id="size" name="size">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="amount">Amount of shoe size:</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" data-slug="source" value="<?php echo e($row['amount_of_size']); ?>" id="amount" name="amount">
                                	</div>
                                </div>
                                <input type="submit" name="btn-submit" id="submit" value="Submit" class="btn btn-info pull-right">
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>