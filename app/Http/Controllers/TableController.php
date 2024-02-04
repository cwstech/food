<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    function index() {
        return view('tableView');
    }
    function TableDetails($ID) {
        echo $ID;
    }
}
