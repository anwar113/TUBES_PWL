<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Men;
use App\Women;
use App\Kids;

class WebController extends Controller
{
//---Produk Men
    public function menbajupendek(){ 
		$men= Men::where('jenis','=','Kaos lengan pendek')->get();
        return view('menbajupendek',['men'=>$men]);
    }
    public function menbajupanjang(){ 
		$men= Men::where('jenis','=','Kaos lengan panjang')->get();
        return view('menbajupanjang',['men'=>$men]);
    }
    public function mensweater(){ 
		$men= Men::where('jenis','=','Sweater')->get();
        return view('mensweater',['men'=>$men]);
    }
    public function menjaket(){ 
		$men= Men::where('jenis','=','Jaket')->get();
        return view('menjaket',['men'=>$men]);
    }

//---Produk Women
    public function womenbajupendek(){ 
		$women= Women::where('jenis','=','Kaos lengan pendek')->get();
        return view('womenbajupendek',['women'=>$women]);
    }
    public function womenbajupanjang(){ 
		$women= Women::where('jenis','=','Kaos lengan panjang')->get();
        return view('womenbajupanjang',['women'=>$women]);
    }
    public function womensweater(){ 
		$women= Women::where('jenis','=','Sweater')->get();
        return view('womensweater',['women'=>$women]);
    }
    public function womenjaket(){ 
		$women= Women::where('jenis','=','Jaket')->get();
        return view('womenjaket',['women'=>$women]);
    }
    public function womengamis(){ 
		$women= Women::where('jenis','=','Gamis')->get();
        return view('womengamis',['women'=>$women]);
    }
    
    //---Produk Kids
    public function kidsbajupendek(){ 
		$kid= Kids::where('jenis','=','Kaos lengan pendek')->get();
        return view('kidsbajupendek',['kid'=>$kid]);
    }
    public function kidsbajupanjang(){ 
		$kid= Kids::where('jenis','=','Kaos lengan panjang')->get();
        return view('kidsbajupanjang',['kid'=>$kid]);
    }
    public function kidssweater(){ 
     		$kid= Kids::where('jenis','=','Sweater')->get();
        return view('kidssweater',['kid'=>$kid]);
    }
    public function kidsjaket(){ 
		$kid= Kids::where('jenis','=','Jaket')->get();
        return view('kidsjaket',['kid'=>$kid]);
    }
}
