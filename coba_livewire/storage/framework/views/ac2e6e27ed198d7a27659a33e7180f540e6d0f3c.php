<<<<<<< HEAD
<div id="sidebar-open bg-light" class="s">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar-item">
=======
<div id="sidebar-open bg-light" class="s"> 
    <div class="d-flex flex-column flex-shrink-0 p-3 sidebar-item">
>>>>>>> bb28eb48e678f5b668f56a361bb42d358bacb3d0
        <a href="/home" class="d-flex align-items-center justify-content-center p-3 my-3 mx-3 text-decoration-none bg-primary rounded" id="logo">
            <i class="material-icons-round bi me-2 text-white">account_balance_wallet</i>
            <span class="fs-5 text-white text">QiuQiu</span>
          </a>
        <ul class="nav flex-column my-3">
          <li class="nav-item">
            <a href="/tabel" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('tabel') ? 'active' : ''); ?>" aria-current="page">
              
              <i class="material-icons-round bi me-4">dashboard</i>
              <span class="text">tabel</span>
            </a>
          </li>
          <li>
            <a href="/" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('dashboard') ? 'active' : ''); ?>">
            <i class="material-icons-round bi me-4">dashboard</i>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="/produksi" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('produksi') ? 'active' : ''); ?>">
              <i class="material-icons-round bi me-4">precision_manufacturing</i>
              <span class="text">Produksi</span>
            </a>
          </li>
          <li>
            <a href="/pengiriman" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('pengiriman') ? 'active' : ''); ?>">
              <i class="material-icons-round bi me-4">local_shipping</i>
              <span class="text">Pengiriman</span>
            </a>
          </li>
          <li>
            <a href="/rekap_subkon" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('rekap_subkon') ? 'active' : ''); ?>"">
              <i class="material-icons-round bi me-4">groups</i>
              <span class="text">Rekap Subkon</span>
            </a>
          </li>
        </ul>
      </div>
</div>
<?php /**PATH C:\xampp\htdocs\FINANCE\template-kedaireka\coba_livewire\resources\views/components/sidebar.blade.php ENDPATH**/ ?>