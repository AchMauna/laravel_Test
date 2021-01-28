<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'tabel_produk';
    protected $primaryKey = 'produk_id';
    public $incrementing = false;
    public $timestamps = false;
}
