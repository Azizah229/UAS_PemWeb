

<?php $__env->startSection('container'); ?>
    <div class="banner3" style="padding-top: 8%; padding-bottom: 8%; background:url('https://i.pinimg.com/564x/ab/bd/71/abbd71caee3bb501dffe7dfa4a991c2c.jpg')">
        <div class="container-xl">
            <h2 class="tittle text-center pb-4" style="font-family: 'Gill Sans'; font-size: 80px; color: white);"
                ><?php echo e($nama); ?></h2>
                <div class="clearfix" style="font-family: 'Baskerville Old Face'; font-size: 20px; color: white)">
                  
                  <img src="<?php echo e($cbeans->foto); ?>" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
          
                    <p>
                      <?php echo e($cbeans->isi); ?>

                    </p>
                  </div>
            </div>
            <center>
              <div class="mx-auto fw-bold fst-italic" style="padding-top: 20px; color:rgb(255, 219, 205)">
                  <ins><a class="nav-link" href="/cbeans">back to C'Beans</a></ins>
              </div>
            </center>
          </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sicory2\resources\views/tampilanc.blade.php ENDPATH**/ ?>