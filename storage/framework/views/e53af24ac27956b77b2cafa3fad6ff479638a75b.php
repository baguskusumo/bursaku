

<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tabel Mobil</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="<?php echo e(route('mobil.create')); ?>"> Input Data Mobil</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('succes')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>ID Mobil</th>
            <th width="280px"class="text-center">Mesin</th>
            <th width="280px"class="text-center">Kapasitas Penumpang</th>
            <th width="280px"class="text-center">Tipe</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        <?php $__currentLoopData = $mobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center"><?php echo e(++$i); ?></td>
            <td><?php echo e($mob->id_motor); ?></td>
            <td><?php echo e($mob->mesin); ?></td>
            <td><?php echo e($mob->kapasitas_penumpang); ?></td>
            <td><?php echo e($mob->tipe); ?></td>
            <td class="text-center">
                <form action="<?php echo e(route('mobil.destroy',$mob->id)); ?>" method="POST">

                   <a class="btn btn-info btn-sm" href="<?php echo e(route('mobil.show',$mob->id)); ?>">Show</a>

                    <a class="btn btn-primary btn-sm" href="<?php echo e(route('mobil.edit',$mob->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data mobil ini?')">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
	
		<a class="btn btn-secondary" href="<?php echo e(route('bursaku.index')); ?>"> Tabel Kendaraan</a>
		<a class="btn btn-secondary" href="<?php echo e(route('motor.index')); ?>"> Tabel Motor</a>
    <?php echo $mobil->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bursaku\resources\views/mobil/index.blade.php ENDPATH**/ ?>