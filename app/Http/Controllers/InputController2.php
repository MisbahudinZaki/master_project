<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController2 extends Controller
{
    public function index(){
        return view("kalkulator2.home");
    }

    public function input(Request $request){
        $a=$request->angka1;
        $b=$request->angka2;
        $opr=$request->operator;
        $hasil = $request->hasil;

        if($opr == "x"){
            $hasil = $a*$b;
        }
        elseif($opr == ":"){
            if($a == 0)
            {
                $hasil = "error";
            }
            elseif($b == 0){
                $hasil = "error";
            }
            else{
                $hasil = $a/$b;
        }
        }
        elseif($opr == "+"){
            $hasil = $a+$b;
        }
        elseif($opr == "-"){
            $hasil = $a-$b;
        }
        elseif($opr == "reset"){
            return redirect()->route('kalkulator2');
        }
        else{
            $hasil = "undefined";
        }

        return view('kalkulator2.count', compact('hasil'));
    }
}
