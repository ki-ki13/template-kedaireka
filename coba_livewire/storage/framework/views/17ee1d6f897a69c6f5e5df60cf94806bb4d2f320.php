

<?php $__env->startSection('container'); ?>
<div class="container-fluid flex-grow-1">
  <h3 class="my-4 judul"> <?php echo e($title); ?> </h3>
  <div class="card border-light mb-3">
    <div class="card-body table-responsive">
      <h5 class="my-4 mx-2"> 
        <i class="material-icons-round bi me-2"><?php echo e($icon); ?></i>
        <?php echo e($ket); ?><?php echo e($title); ?> 
      </h5>

      <div class="row my-4 justify-content-between">
        <span class="my-2 mx-2 fs-7" style="color: #5C5858"> 
          Cari Berdasarkan
        </span>
        <div class="col-5">
              <div class="input-group mx-2 mb-4">
                <select class="selection form-select" id="itemType" name="item_type" aria-label=".form-select-sm example">
                  <option value= "0">Choose Columns</option>
                  <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $columns_id => $columns_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($columns_id); ?>"><?php echo e($columns_name); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </select>
                <input class="form-control" style="width:10rem" id="exampleInputEmail1" aria-describedby="emailHelp" name="search" placeholder="search..">
              </div>
        </div>
        <div class="col-4 float-end">
            <button class="btn aksi-btn text-white mx-2">Pilih Semua</button>
            <button class="btn aksi-btn2 mx-2 text-white">Approve Tagihan</button>
        </div>
        

<table class="table">
  
    <thead>
      <tr class="text-center">
        <th scope="col">Pilih</th>
        <th scope="col" >
          <span>
            Tanggal Pengerjaan
            <i wire:click="sortBy('tgl_terima_fppp')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'tgl_terima_fppp' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th> 
        <th  scope="col" >
          <span>
            Tanggal Tagih
            <i wire:click="sortBy('tgl_tagih')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'tgl_tagih' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th>   
        <th  scope="col" >
            <span>
              Jenis Pekerjaan
              <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span> 
          </th>             
        <th  scope="col" >
          <span>
            No FPPP
            <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th>
        <th  scope="col">
          <span>
            Nama Projek
            <i wire:click="sortBy('project_name')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'project_name' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
            <span>
              Tipe Barang
              <i wire:click="sortBy('tipe_barang')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'tipe_barang' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
        <th  scope="col">
            <span>
              Warna
              <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
        <th  scope="col">
            <span>
              Kode Unit
              <i wire:click="sortBy('kode_unit')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'kode_unit' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
        <th  scope="col">
            <span>
              Jumlah Daun
              <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
        <th  scope="col">
            <span>
              Harga Jasa
              <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
        <th  scope="col">
            <span>
                Total Biaya
              <i wire:click="sortBy('')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === '' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
            </span>
        </th>
      </tr>
    
      
      
    </thead>
    
    <tbody>
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="items-align-center">
                <th scope="row">
                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">             
                </th>
                <td><?php echo e($item -> tgl_terima_fppp); ?></td>
                <td><?php echo e($item -> tgl_tagih); ?></td>
                <td>jenis pekerjaan</td>
                <td><?php echo e($item -> fppps -> fppp_no); ?></td>
                <td><?php echo e($item -> fppps -> project_name); ?></td>
                <td><?php echo e($item -> tipe_barang); ?></td>
                <td>warna</td>
                <td><?php echo e($item -> kode_unit); ?></td>
                <td>jumlah daun</td>
                <td>harga jasa</td>
                <td>total biaya</td>
              </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table> 
  
  <?php echo e($items -> links()); ?>


</div>
</div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kedaireka\Coba\coba_livewire\resources\views/livewire/rekap-subkon.blade.php ENDPATH**/ ?>