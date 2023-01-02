<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopeProduct;
use Illuminate\Database\Eloquent\Builder;


class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'product_id';


    protected static function boot()
    {
        parent::boot();

    //    static::addGlobalScope(new ScopeProduct);

        static::addGlobalScope('price', function (Builder $builder) {
            $builder->where('price', '>', 100);
        });

    }
}
