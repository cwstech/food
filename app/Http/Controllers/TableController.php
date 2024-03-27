<?php

namespace App\Http\Controllers;

use App\Models\table_info;
use Illuminate\Http\Request;

class TableController extends Controller
{
    
    function index() {
        // return view('tableView');
        $tables = table_info::where('user_id', auth()->user()->id)->orderBy('table_no', 'ASC')->get(); // Assuming your model is named 'Table'
        return view('tableView', ['tables' => $tables]);
    }

    function tableAdd(Request $request) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz-_';
        $randomString = '';
        $table = $request->input('tables');

        function gen($randomString, $characters)
        {
            for ($i = 0; $i < 5; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
        }

        for ($i=0; $i < $table; $i++) { 
            do {
                $value = gen($randomString, $characters);
                $sre = table_info::where('table_url', $value)->get();
                $sres = $sre->count();
                // $sres = $obj->ser_sort($value);
            } while ($sres > 0);
            $table_Continue = table_info::where('user_id', auth()->user()->id)->count();
            table_info::insert([
                'user_id' => auth()->user()->id,
                'table_no' => $table_Continue+1,
                'table_url' => $value,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }

    }
    function TableDetails($ID) {
        $table_info = table_info::where('table_url', $ID)->get();
        if ($table_info->count()  > 0) {
            return view('tableEdit', ['id' => $table_info]);
        }
        // return view('404', ['id' => $table_info]);
    }
    function TableDelete(Request $request) {
        $table = $request->input('table');
        $status = table_info::where('table_url', $table)->delete();
        return $status;
    }
    function getDetails() {
    }
    
}
