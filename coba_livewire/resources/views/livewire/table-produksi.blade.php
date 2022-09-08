@extends('layouts/main')

@section('container')

<div class="container-fluid flex-grow-1">
  <h3 class="my-4 judul"> {{ $title }} </h3>
  <div class="card border-light mb-3">
    <div class="card-body table-responsive">
      <h5 class="my-4 mx-2">
        <i class="material-icons-round bi me-2">{{ $icon }}</i>
        {{ $ket }}{{ $title }}
      </h5>


<table class="table">
  {{-- table heading --}}
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col" >
          <span>
            Kode Barang
            <i wire:click="sortBy('kode_barang')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'kode_barang' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Nama Barang
            <i wire:click="sortBy('nama_barang')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'nama_barang' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Stock
            <i wire:click="sortBy('stock')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'stock' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col" >
          <span>
            Harga
            <i wire:click="sortBy('harga')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'harga' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
          <span>
            Total Aset
            <i wire:click="sortBy('total_aset')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'total_aset' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th  scope="col">
          <span>
            Barang Datang
            <i wire:click="sortBy('created_at')" style="cursor: pointer" class="material-icons-round {{ $sortBy === 'created_at' && $sortDirection === 'desc' ? '' : 'no-use' }}">arrow_drop_down</i>
          </span>
        </th>
        <th scope="col">Status</th>
      </tr>
      {{-- Search filter --}}
      {{-- <tr class="align-center">
        <td></td>
        <td>
           <input type="text" class="form-control" wire:model="searchColumnsKode" style="width : 10rem"/>
        </td>
        <td>
          <input type="text" class="form-control" wire:model="searchColumnsNama" style="width : 10rem"/>
       </td>
        <td>
          <div class="d-flex flex-column">
            <label>From</label>
            <input type="number" class="form-control d-inline mb-2" style="width: 75px"
              wire:model="searchColumnsStockMin" />
            <label>to</label>
            <input type="number" class="form-control d-inline" style="width: 75px"
             wire:model="searchColumnsStockMax" />
          </div>
        </td>
        <td>
          <div class="d-flex flex-column">
            <label>From</label>
            <input type="number" class="form-control d-inline mb-2" style="width: 75px"
              wire:model="searchColumnsPriceMin" />
            <label>to</label>
            <input type="number" class="form-control d-inline" style="width: 75px"
             wire:model="searchColumnsPriceMax" />
          </div>
       </td>
       <td>
        <div class="d-flex flex-column">
          <label>From</label>
          <input type="number" class="form-control d-inline mb-2" style="width: 75px"
            wire:model="searchColumnsTotalMin" />
          <label>to</label>
          <input type="number" class="form-control d-inline" style="width: 75px"
           wire:model="searchColumnsTotalMax" />
        </div>
     </td>
     <td>
      <div class="d-flex flex-column">
        <label>From</label>
        <input type="date" class="form-date form-control d-inline mb-2"
          wire:model="searchColumnsDateMin" />
        <label>to</label>
        <input type="date" class="form-date form-control d-inline"
         wire:model="searchColumnsDateMax" />
      </div>
   </td>
        <td>
           <select class="selection form-control" wire:model="searchColumnsStatusId">
              <option value="">choose status</option>
               @foreach ($status as $status_id => $status_name)
                   <option value="{{ $status_id }}">{{ $status_name }}</option>
               @endforeach
           </select>
        </td>
     </tr> --}}
    </thead>
    {{-- table body --}}
    <tbody>
      @foreach ($items as $d=>$item)
              <tr class="items-align-center">
                <th scope="row">{{ $items->firstItem() + $d}}</th>
                <td>{{ $item -> kode_barang }}</td>
                <td>{{ $item -> nama_barang }}</td>
                <td>{{ $item -> stock }}</td>
                <td> @money($item -> harga) </td>
                <td>@money($item -> total_aset )</td>
                <td>{{ $item -> date_for_humans }}</td>
                <td class="p-4 text-center">
                  <span class="status  p-2 rounded" style="background-color: {{ $item -> status_color }}; color:{{ $item-> status_text_color }}">{{ $item -> status }}</span>
                </td>
              </tr>
      @endforeach
    </tbody>
  </table>
  {{-- pagination   --}}
  {{ $items -> links() }}

</div>
</div>
</div>
@endsection

