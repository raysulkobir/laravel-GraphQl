<?php
// File: app/GraphQL/Queries/BrandQuery.php

namespace App\GraphQL\Queries;

use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Models\Brand;
use App\Facades\Shop;

class BrandQuery
{
    public function brandsList($rootValue, array $args, GraphQLContext $context)
    {
        return Shop::call('App\Http\Controllers\BrandController@brandsList', $args);
    }
}
