<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::find(5);

        // return $category->names[0]['data']['fa'];
        return $category->products->first()->load([
            'media' => function ($q) {
                $q->whereCollectionName('SpecialImage');
            },
        ])->getFirstMediaUrl('SpecialImage');
    }
}
