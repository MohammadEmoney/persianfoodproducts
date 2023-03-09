<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\CommentRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->load('category');
        $relatedProducts = Product::isVisible()
                            ->where('id', "!=", $product->id)
                            ->where('category_id', $product->category_id)
                            ->latest()
                            ->take(5)
                            ->get();
        return view('front.products.show', compact('product', 'relatedProducts'));
    }

    public function comment(Product $product, CommentRequest $request)
    {
        $product->comment->create($request->validated());
        return back()->with(['message' => __('comment added successfully')]);
    }
}
