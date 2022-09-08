<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.table-produksi',[
            'title' => 'Dashboard',
            'ket' => 'Tabel ',
            'icon' => 'precision_manufacturing'
        ]);
    }
}
