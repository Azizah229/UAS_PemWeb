<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
    <img width="120" src="img/icon2.png" alt="icon2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($nama === "Home") ? 'active' : ''); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($nama === "Resep") ? 'active' : ''); ?>" href="/resep">Resep</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($nama === "C'Beans") ? 'active' : ''); ?>" href="/cbeans">C'Beans</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($nama === "About Us") ? 'active' : ''); ?>" href="/aboutus">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\xampp\htdocs\sicory2\resources\views/Partials/navbar.blade.php ENDPATH**/ ?>