<div id="sidebar-open bg-light" class="s">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar-item">
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
            <a href="/tipe" class="d-flex nav-link p-3 align-items-center <?php echo e(Route::is('tipe.index') ? 'active' : ''); ?>">
              <i class="material-icons-round bi me-4">precision_manufacturing</i>
              <span class="text">Barang</span>
            </a>
          </li>
        </ul>
      </div>
</div>
<?php /**PATH C:\xampp\htdocs\FINANCE\template-kedaireka\coba_livewire\resources\views/components/sidebar.blade.php ENDPATH**/ ?>