<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemusnahanproduk extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk_pemusnahan';
    public $timestamps = true;
}
