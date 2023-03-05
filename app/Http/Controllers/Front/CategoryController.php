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
        dd($category->name);

        // return $category->names[0]['data']['fa'];
        // return $category->products->first()->load([
        //     'media' => function ($q) {
        //         $q->whereCollectionName('SpecialImage');
        //     },
        // ])->getFirstMediaUrl('SpecialImage');
    }

    public function show(Category $category)
    {
        $products = $category->products;
        return view('front.categories.index', compact('products', 'category'));
    }
}
