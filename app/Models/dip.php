<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dip extends Model
{
    use HasFactory;
    protected $primaryKey = 'dip_id';
    public $timestamps = true;
}
