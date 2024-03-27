<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index() {
        $cats = category::where('user_id', auth()->user()->id)->get();
        $cat = category::where('user_id', auth()->user()->id)->pluck('id');
        $item = item::whereIn('cat_id', $cat)->get();
        // dd($item);
        return view('intemView', ['items'=> $item, 'cats' => $cats]);
    }
}
