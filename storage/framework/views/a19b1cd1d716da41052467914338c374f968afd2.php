

<?php $__env->startSection('container'); ?>
<div class="resep1">
    <h1 style="text-align: center; font-size: 10mm;font-family:'Gill Sans'; color:white; text-shadow:3px 2px 5px black; padding-top: 80px">RESEP</h1>
</div>

<?php $__currentLoopData = $kategoris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<center><div class="card" style="width: 50rem; padding-top: 10px">
  <h5 class="card-title"><?php echo e($kategori->nama); ?></h5>
  <div class="cropped-img" style="height: 500px; overflow:hidden">
  <img style="" src="<?php echo e($kategori->foto); ?>" class="card-img-top" alt="foto">
  </div>
  <div class="card-body" style="padding-top: 20px">
    <a href="/resep/<?php echo e($kategori->slug); ?>" class="btn btn-dark">Open Now</a>
  </div>
</div>
</center>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h2 style="padding-bottom: 20px"></h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sicory2\resources\views/resep.blade.php ENDPATH**/ ?>