<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function searchCategories(Request $request)
    {
        $query = $request->input('query');
        $categories = Category::where('name', 'like', '%' . $query . '%')->get();
    
        return response()->json($categories);
    }
}
