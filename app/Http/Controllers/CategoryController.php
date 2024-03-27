<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        $cat = category::where('user_id', auth()->user()->id)->withCount('items')->get();
        // $cat = category::join('user_id', auth()->user()->id)->get();
        return view('category', ['cats' => $cat]);
    }
    function addCategory(Request $req) {
        $cat = $req->input('data');
        if(preg_match('/[a-zA-Z0-9 ]/', $cat)){
            category::insert([
                'user_id' => auth()->user()->id,
                'name' => $cat,
            ]);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Invalid category format']);
    }
}
