<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected $table = 'kategoris';
    protected $guarded = ['id'];
    use HasFactory;


    public function barang()
    {
        return $this->hasMany(Barang::class, 'kategori_id', 'id');
    }
}