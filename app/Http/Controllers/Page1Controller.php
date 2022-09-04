<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{
    public function index()
    {
        $data=DB::table('Points')
                  -> where('id',1)
                  -> value('distributor');
        // dd($data);
        // return $data;
        $data = [
             "ad"=>($data)
         ];
        return view('main', $data);
        // foreach ($data as $key)
        // {
        //     echo "<table border=2>";
        //     echo "<tr><td width=300>".$key->Name."</td>";
        //     echo "<td width=300>".$key->NoktaKodu."</td></tr>";
        //     echo "</table>";
        // }

    }
}