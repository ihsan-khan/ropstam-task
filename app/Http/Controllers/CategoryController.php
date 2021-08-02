<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        if($categories){
            return response()->json([
                'error' => false,
                'data' => $categories,
                'message' => 'all categories',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'error' => false,
                'data' => '',
                'message' => 'no categories found',
                'status_code' => 200
            ], 200);
        }
        
    }
}
