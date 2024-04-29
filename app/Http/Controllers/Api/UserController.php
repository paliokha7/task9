<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function getCurrentUser(Request $request)
    {
        $user = $request->user(); 

        return response()->json(['user' => $user], 200);
    }

    public function getUserCategories(Request $request)
    {
        $user = $request->user(); 
        $categories = $user->categories; 

        return response()->json(['categories' => $categories], 200);
    }

    public function getCategoryProducts(Request $request, Category $category)
    {
        $user = $request->user(); 
        if (!$user->categories->contains($category)) {
            return response()->json(['message' => 'This category does not belong to the user.'], 403);
        }
    
        $products = Product::where('category_id', $category->id)->get();
    
        return response()->json(['products' => $products], 200);
    }
}

