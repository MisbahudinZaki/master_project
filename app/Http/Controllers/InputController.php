<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        return view('kalkulator.index');
    }

    public function input(Request $request)
    {
        $angka1 =$request->angka1;
        $angka2 = $request->angka2;
        $operator = $request->operator;
        $hasil = $request->hasil;

        if($operator == "kali")
        {
            $hasil = $angka1*$angka2;
        }
        elseif($operator == "bagi")
        {
            if($angka1 == 0)
            {
                $hasil = "error";
            }
            elseif($angka2 == 0){
                $hasil = "error";
            }
            else{
                $hasil = $angka1/$angka2;
            }
        }
        elseif($operator == "tambah"){
            $hasil = $angka1+$angka2;
        }
        elseif($operator == "kurang"){
            $hasil = $angka1-$angka2;
        }
        elseif($operator == "reset")
        {
            return redirect()->route('kalkulator');
        }
        else{
            $hasil = "undefined";
        }

        return view('kalkulator.hitung', compact('hasil'));
    }

    public function manual()
    {
        return view('kalkulator.kalkulatormanual');
    }
}
