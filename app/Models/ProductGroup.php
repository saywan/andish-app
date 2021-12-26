<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductGroup extends Model
{
    public $table = 'product_group';
    protected $fillable = ['userId','title', 'percent','fee','unit','datereg'];
    public $timestamps = true;
}
