

<?php $__env->startSection('container'); ?>
<div class="container-fluid" style="background:url('https://i.pinimg.com/564x/ab/bd/71/abbd71caee3bb501dffe7dfa4a991c2c.jpg')">
    <div class="banner3" style="padding-top: 8%; padding-bottom: 8%;">
        <div class="container">
            <h2 class="tittle text-center pb-4" style="font-family: 'Gill Sans'; font-size: 80px; color: white;"
                ><img width="150" src="<?php echo e($icon); ?>" alt=""><?php echo e($nama); ?></h2>
            <div class="row g-5 text-center" style="font-family: 'Britannic'; font-size: 25px;">
              
              <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-4">
                <div class="card">
                  <div class="cropped-img" style="width: 340px; height: 300px; overflow:hidden">
                    <img widht="100%" src="<?php echo e($post->foto); ?>" class="card-img-top" alt="...">
                  </div>
                    <div class="card-body">
                      <a class="nav-link" href="/resep/<?php echo e($post->slug); ?>"><?php echo e($post->nama); ?></a>
                    </div>
                  </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <center>
            <div class="mx-auto fw-bold fst-italic" style="padding-top: 20px; color:rgb(255, 219, 205))">
                <ins><a class="nav-link" href="/resep">back to resep</a></ins>
            </div>
          </center>
          </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sicory2\resources\views/kategori.blade.php ENDPATH**/ ?>