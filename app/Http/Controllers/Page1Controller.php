<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{
    public function index()
    {
        $data=DB::table('Points')
                  -> where('id',60)
                  -> value('name');
        $data1=[DB::table('Points')
                  // -> where('id',60)
                  -> value('name')];
        //dd($data);
        //return $data;

        foreach($data1 as $key){
        echo $key;
        }



        // $data = [
        //      //"ad"=>($data)
        //      "ad"=>($key->Name)
        //  ];
        // return view('show', $data);
        // }
        // foreach ($data as $key)
        // {
        //     echo "<table border=2>";
        //     echo "<tr><td width=300>".$key->Name."</td>";
        //     //echo "<td width=300>".$key->NoktaKodu."</td></tr>";
        //     echo "</table>";
        // }

    }
    public function formtest()
    {
        return view('form');
    }

}
