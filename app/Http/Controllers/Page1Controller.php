<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{
    public function index()
    {
        $data=DB::table('Points')-> get();
        // dd($data);
        // return $data;
        foreach ($data as $key)
        {
            echo $key->Name;
            echo "<br>";
        }
    }
}