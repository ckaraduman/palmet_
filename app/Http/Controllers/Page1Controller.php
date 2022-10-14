<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{

        // -------------------------------------------------------------------------------------
        // Bu çalışan fonksiyon. Parametre alarak işlem yapan fonksiyon için yedeklendi--start1
        public function index()
        {
        $pgp_cons=DB::table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                  ->where('OkumaTarihi','>=','2022-10-01 08:00:00.000')
                                  ->where('OkumaTarihi','<=','2022-10-10 08:00:00.000')
                                  ->sum('Tuketim2');
        $pgp_budget=DB::table('GetData')->where('TMP_Tasitan','ELEKTRIK')
                                  ->where('OkumaTarihi','>=','2022-10-01 08:00:00.000')
                                  ->where('OkumaTarihi','<=','2022-10-10 08:00:00.000')
                                  ->sum('GunlukButceSm3');
        $pgp_total=$pgp_cons+$pgp_budget;
        $baymina_cons=DB::table('GetData')->where('IstasyonAdi','BAYMINA')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000','2022-10-10 08:00:00.000'])
                                  ->sum('Tuketim2');
        $baymina_budget=DB::table('GetData')->where('IstasyonAdi','BAYMINA')
                                  ->whereBetween('OkumaTarihi', ['2022-10-01 08:00:00.000', '2022-10-10 08:00:00.000'])
                                  ->sum('GunlukButceSm3');
        return view('hgf_dashboard', compact('pgp_cons','pgp_budget','baymina_cons', 'baymina_budget'));
        }
        // Bu çalışan fonksiyon. Parametre alarak işlem yapan fonksiyon için yedeklendi--end1
        // -------------------------------------------------------------------------------------

        // --$data=DB::table('Points')
        //           -> where('id',60)
        //           -> value('name');
        // //dd($data);
        // //return $data;
        //
        // //foreach($data1 as $key){
        // --$ad=$data;
        // --echo $ad;
        // --return view('show', compact('ad'));
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


    public function page()
    {
        return view('index');
    }
    public function formtest()
    {
        return view('form');
    }
    // -------------------------------------------------------------------------------------
    // Testler için kullanılan ve alınan dataları ekrana yazdıran kısım ------------ start2
    public function deneme(Request $request)
    {
        // return view('test1');
        // dd($request);
        // return $request->all();
        echo $request->input('date1');
        echo '<br>';
        echo $request->input('date2');
        echo '<br>';
        echo '<br>';
        echo $request->date1;
        echo '<br>';
        echo $request->date2;
    }
    // -------------------------------------------------------------------------------------
    // Testler için kullanılan ve alınan dataları ekrana yazdıran kısım -------------- end2
}
