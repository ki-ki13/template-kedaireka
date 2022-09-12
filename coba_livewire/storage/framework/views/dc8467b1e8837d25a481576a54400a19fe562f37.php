<?php $__env->startSection('container'); ?>

<div class="container-fluid flex-grow-1">
  <h3 class="my-4 judul"> <?php echo e($title); ?> </h3>
  <div class="card border-light mb-3">
    <div class="card-body table-responsive">
      <h5 class="my-4 mx-2">
        <i class="material-icons-round bi me-2"><?php echo e($icon); ?></i>
        <?php echo e($ket); ?><?php echo e($title); ?>

      </h5>


<table class="table">
  
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col" >
          <span>
            Kode Barang
            <i wire:click="sortBy('kode_barang')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'kode_barang' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Nama Barang
            <i wire:click="sortBy('nama_barang')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'nama_barang' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Stock
            <i wire:click="sortBy('stock')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'stock' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Harga
            <i wire:click="sortBy('harga')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'harga' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
          <span>
            Total Aset
            <i wire:click="sortBy('total_aset')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'total_aset' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
          <span>
            Barang Datang
            <i wire:click="sortBy('created_at')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'created_at' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th scope="col">Status</th>
      </tr>
      
      
    </thead>
    
    <tbody>
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="items-align-center">
                <th scope="row"><?php echo e($items->firstItem() + $d); ?></th>
                <td><?php echo e($item -> kode_barang); ?></td>
                <td><?php echo e($item -> nama_barang); ?></td>
                <td><?php echo e($item -> stock); ?></td>
                <td> Rp. <?= number_format($item -> harga,0, ',','.'); ?> </td>
                <td>Rp. <?= number_format($item -> total_aset,0, ',','.'); ?></td>
                <td><?php echo e($item -> date_for_humans); ?></td>
                <td class="p-4 text-center">
                  <span class="status  p-2 rounded" style="background-color: <?php echo e($item -> status_color); ?>; color:<?php echo e($item-> status_text_color); ?>"><?php echo e($item -> status); ?></span>
                </td>
              </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  
  <?php echo e($items -> links()); ?>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FINANCE\template-kedaireka\coba_livewire\resources\views/livewire/table-produksi.blade.php ENDPATH**/ ?>