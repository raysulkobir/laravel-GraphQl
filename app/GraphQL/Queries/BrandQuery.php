<?php

namespace App\GraphQL\Queries;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\Brand;
use App\Facades\Shop;

class BrandQuery
{
    public function index($rootValue, array $args, GraphQLContext $context)
    {
        return Shop::call('App\Http\Controllers\BrandController@index', $args);
    }
}
