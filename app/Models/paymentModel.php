<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class paymentModel extends Model
{
    public $incrementing = false; // to disable auto-incrementing (kalo gak ada ini tipe varcharnya gak muncul)
    protected $table = "user_transaction_list";
    protected $guarded = [];
    protected $primaryKey = 'transaction_code';
    use HasFactory;
}
