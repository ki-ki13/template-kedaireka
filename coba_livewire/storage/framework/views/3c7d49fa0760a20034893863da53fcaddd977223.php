

<?php $__env->startSection('container'); ?>
<div class="container-fluid flex-grow-1">
  <h3 class="my-4 judul"> <?php echo e($title); ?> </h3>
  <div class="card border-light mb-3">
    <div class="card-body table-responsive">
      <h5 class="my-4 mx-2"> 
        <i class="material-icons-round bi me-2"><?php echo e($icon); ?></i>
        <?php echo e($ket); ?><?php echo e($title); ?> 
      </h5>

      <div class="row my-4">
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
      </div>

<table class="table">
  
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col" >
          <span>
            Tanggal
            <i wire:click="sortBy('created_at')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'created_at' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th> 
        <th  scope="col" >
          <span>
            No Quotation
            <i wire:click="sortBy('quotation_no')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'quotation_no' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th>               
        <th  scope="col" >
          <span>
            No FPPP
            <i wire:click="sortBy('fppp_no')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'fppp_no' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span> 
        </th>
        <th  scope="col" >
          <span>
            Aplikator
            <i wire:click="sortBy('applicator_name')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'applicator_name' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
          <span>
            Nama Projek
            <i wire:click="sortBy('project_name')" style="cursor: pointer" class="material-icons-round <?php echo e($sortBy === 'project_name' && $sortDirection === 'desc' ? '' : 'no-use'); ?>">arrow_drop_down</i>
          </span>
        </th>
        <th scope="col">Status</th>
      </tr>
    
      
      
    </thead>
    
    <tbody>
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr class="items-align-center">
                <th scope="row"><?php echo e($items->firstItem() + $d); ?></th>
                <td><?php echo e($item -> date_for_humans); ?></td>
                <td><?php echo e($item -> quotation_no); ?></td>
                <td><?php echo e($item -> fppp_no); ?></td>
                <td><?php echo e($item -> applicator_name); ?></td>
                <td><?php echo e($item -> project_name); ?></td>
                <td class="p-4 text-center">
                  <button class="status  p-2 btn btn-outline-light" style="background-color: <?php echo e($item -> status_color); ?>; color:<?php echo e($item-> status_text_color); ?>"><?php echo e($item -> acc_produksi); ?></button>
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


<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kedaireka\Coba\coba_livewire\resources\views/livewire/table-produksi.blade.php ENDPATH**/ ?>