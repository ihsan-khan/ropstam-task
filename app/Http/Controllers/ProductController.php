<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;

class ProductController extends Controller
{
    public function getTrendingProduct(){
        $trending_products = Product::with('productSize')->where('status','trending')->get();
        if($trending_products){
            return response()->json([
                'error' => false,
                'data' => $trending_products,
                'message' => 'trending products',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'error' => false,
                'data' => '',
                'message' => 'no trending products',
                'status_code' => 200
            ], 200);
        }
        
    }

    public function getProductDetail(Request $request){
        $product = Product::where('id',$request->id)->with('productSize')->first();
        if($product){
            $product->rating_count = Review::where('product_id',$request->id)->count('rating');
            $product->review_count = Review::where('product_id',$request->id)->whereNotNull('review')->count();
            $product->rating_avg = Review::where('product_id',$request->id)->avg('rating');
            return response()->json([
                'error' => false,
                'data' => $product,
                'message' => 'product detail',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'error' => false,
                'data' => '',
                'message' => 'no product found',
                'status_code' => 200
            ], 200);
        }
       
    }
}
