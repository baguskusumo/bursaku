

<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Kendaraan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="<?php echo e(route('motor.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('motor.update',$motor->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Motor:</strong>
                <input type="text" name="id_motor" class="form-control" placeholder="ID Motor" value="<?php echo e($motor->id_motor); ?>">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mesin:</strong>
                <input type="text" name="mesin" value="<?php echo e($motor->mesin); ?>" class="form-control" placeholder="Mesin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Suspensi:</strong>
                <input type="text" name="tipe_suspensi" value="<?php echo e($motor->tipe_suspensi); ?>" class="form-control" placeholder="Tipe Suspensi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Transimi:</strong>
                <input type="text" name="tipe_transmisi" value="<?php echo e($motor->tipe_transmisi); ?>" class="form-control" placeholder="Tipe Transmisi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bursaku\resources\views/motor/edit.blade.php ENDPATH**/ ?>