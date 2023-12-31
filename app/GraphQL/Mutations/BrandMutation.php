<?php

namespace App\GraphQL\Mutations;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\Brand;
use App\Facades\Shop;

class BrandMutation
{
    public function store($rootValue, array $args, GraphQLContext $context)
    {
        return Shop::call('App\Http\Controllers\BrandController@store', $args);
    }
    public function update($rootValue, array $args, GraphQLContext $context)
    {
        return Shop::call('App\Http\Controllers\BrandController@update', $args);
    }
    public function destroy($rootValue, array $args, GraphQLContext $context)
    {
        return Shop::call('App\Http\Controllers\BrandController@destroy', $args);
    }

}
