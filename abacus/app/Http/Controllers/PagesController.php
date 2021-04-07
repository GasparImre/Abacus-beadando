<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class PagesController extends Controller
{
    public function list(){

        $data['Datas']= Data::all();
        return view('Pages.list',$data);
    }

    public function store(Request $request){
        Data::create([
            'ladder_1'=> $request->ladder_1,
           'ladder_2' => $request->ladder_2,
           'ladder_3'=> $request->ladder_3,
           'ladder_4'=> $request->ladder_4,
           'ladder_5'=> $request->ladder_5,
           'ladder_6'=> $request->ladder_6,
           'ladder_7'=> $request->ladder_7,
           'ladder_8'=> $request->ladder_8
            ]);

        return redirect('/list')->with('success','Sikeres létrehozás');

    }
}
