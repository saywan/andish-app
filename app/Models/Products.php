<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 'product';
    public $fillable = [
        'userId', 'title','groupId','price',
        'count', 'unit', 'weight', 'datereg','is_running_out'
    ];
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public  function ProductWeight()
    {
        return $this->belongsTo(ProductWeight::class);
    }

    public function ProductPack()
    {
        return $this->belongsTo(ProductPackage::class);
    }

    public function brands()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }

    public function ProductGroup()
    {
        return $this->belongsTo(ProductGroup::class,'group_id');
    }

    public function scopeWithProdFilters($query)
    {

        return $query->when(count(request()->input('typecoffe', [])), function ($query) {
            $query->whereIn('coffetype_id', request()->input('typecoffe'));
        })->when(count(request()->input('categories', [])), function ($query) {
            $query->whereIn('category_id', request()->input('categories'));
        });
    }

    public function scopeWithFilters($query, $categories, $coffelists, $typeMills, $productweights, $productpackages)
    {
        return $query->when(count($categories), function ($query) use ($categories) {
            $query->whereIn('category_id', $categories);

        })->when(count($coffelists), function ($query) use ($coffelists) {
            $query->whereIn('coffetype_id', $coffelists);

        })->when(count($typeMills), function ($query) use ($typeMills) {
            $query->whereIn('typemill_id', $typeMills);

        })->when(count($productweights), function ($query) use ($productweights) {
            $query->whereIn('productweight_id', $productweights);

        })->when(count($productpackages), function ($query) use ($productpackages) {
            $query->whereIn('productpack_id', $productpackages);

        });

    }
}
