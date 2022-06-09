

<?php $__env->startSection('container'); ?>
    <div class="banner3" style="padding-top: 8%; padding-bottom: 8%;">
        <div class="container">
            <h2 class="tittle text-center pb-4" style="font-family: 'Gill Sans'; font-size: 80px; color: rgb(255, 255, 255);"
                ><img width="150" src="img/bijikopi.png" alt="">C'Beans</h2>
            <div class="row g-5 text-center" style="font-family: 'Britannic'; font-size: 25px;">
              
              <?php $__currentLoopData = $tampil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-4">
                <div class="card">
                  <div class="cropped-img" style="width: 340px; height: 300px; overflow:hidden">
                    <img src="<?php echo e($item->foto); ?>" class="card-img-center" alt="...">
                  </div>
                    <div class="card-body">
                      <a class="nav-link active" href="/cbeans/<?php echo e($item->slug); ?>"><?php echo e($item->nama); ?></a>
                    </div>
                  </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sicory2\resources\views/cbeans.blade.php ENDPATH**/ ?>