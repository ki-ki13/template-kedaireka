<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fppp extends Model
{
    use HasFactory;
    protected $table = 'fppps';

    public function wos(){
        return $this -> hasMany(Wo::class);
    }

    public function quotations()
    {
        return $this->belongsTo(Quotation::class,"quotation_no");
    }
}