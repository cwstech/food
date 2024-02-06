<?php

namespace App\Http\Controllers;

use App\Models\table_info;
use Illuminate\Http\Request;

class TableController extends Controller
{
    function index() {
        // return view('tableView');
        $tables = table_info::where('user_id', auth()->user()->id)->get(); // Assuming your model is named 'Table'
        return view('tableView', ['tables' => $tables]);
    }
    function TableDetails($ID) {
        echo $ID;
    }
    function getDetails() {
    }
}
