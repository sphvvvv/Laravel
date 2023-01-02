<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Validator;

class ProductServiceProvider extends ServiceProvider
{
    public function boot()
    {

        View::composer(
            'product.index', 'App\Http\Composers\ProductComposer'
        ); 
/*
        View::composer(
            'product.index', function($view){
                $view->with('view_message', "composer message!");
            }
        ); 
*/

        Validator::extend('hello', function($attribute, $value, 
                $parameters, $validator) {
            return $value % 2 == 0;
        });
    }

}
