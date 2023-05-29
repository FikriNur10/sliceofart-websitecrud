<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class productModel extends Model
{
    public $incrementing = false; // to disable auto-incrementing (kalo gak ada ini tipe varcharnya gak muncul)
    protected $table = "product";
    protected $guarded = [];
    protected $primaryKey = 'code_product';
    use HasFactory;
}
