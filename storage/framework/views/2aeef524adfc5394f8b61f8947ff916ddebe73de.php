

<?php $__env->startSection('content'); ?>
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Kendaraan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="<?php echo e(route('bursaku.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Kendaraan:</strong>
                <?php echo e($bursaku->id_kendaraan); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Keluaran:</strong>
                <?php echo e($bursaku->tahun_keluaran); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Warna:</strong>
                <?php echo e($bursaku->warna); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                <?php echo e($bursaku->harga); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bursaku\resources\views/bursaku/show.blade.php ENDPATH**/ ?>