<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        // return view('livewire.hello-world',[
        //     'data' => 'aja'
        // ]);
        return view('livewire.table-produksi',[
            'title' => 'aja'
        ]);
    }
}
