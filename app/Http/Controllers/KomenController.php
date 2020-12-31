<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komen1;
use App\Komen2;
use App\Komen3;
use App\Komen4;
use App\Komen5;
use App\Komen6;
use App\Komen7;
use App\Komen8; 
use App\Komen9; 
use App\Komen10; 
use App\Komen11; 
use App\Komen12; 
use App\Komen13;

class KomenController extends Controller
{
//---Komen 1
    public function komen1(){
		$komen1 = Komen1::all();
		return view('komen1',['komen1'=> $komen1]);
	}
	public function addkomen1(){ 
        return view('addkomen1');
	}
    //proses tambah data komentar
	public function createkomen1(Request $request) { 
        Komen1::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komen1');      
	}
    //Edit Komentar
	public function editkomen1($id){ 
        $komen1 = Komen1::find($id); 
        return view('editkomen1',['komen1'=>$komen1]);     
	}
	public function updatekomen1($id, Request $request) 
    { 
        $komen1 = Komen1::find($id); 
		$komen1->nama = $request->nama; 
		$komen1->nama_produk = $request->nama_produk;
        $komen1->komentar = $request->komentar;    
        $komen1->save(); 
		return redirect('/komen1');     
	}
    //Delete Komentar
	public function deletekomen1($id){ 
        $komen1 = Komen1::find($id); 
		$komen1->delete();         
		return redirect('/komen1');
	}

//---Komen 2
    public function komen2(){
		$komen2 = Komen2::all();
		return view('komen2',['komen2'=> $komen2]);
	}
	public function addkomen2(){ 
        return view('addkomen2');
	}
    //proses tambah data komentar
	public function createkomen2(Request $request) { 
        Komen2::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komen2');      
	}
    //Edit Komentar
	public function editkomen2($id){ 
        $komen2 = Komen2::find($id); 
        return view('editkomen2',['komen2'=>$komen2]);     
	}
	public function updatekomen2($id, Request $request) 
    { 
        $komen2 = Komen2::find($id); 
		$komen2->nama = $request->nama; 
		$komen2->nama_produk = $request->nama_produk;
        $komen2->komentar = $request->komentar;    
        $komen2->save(); 
		return redirect('/komen2');     
	}
    //Delete Komentar
	public function deletekomen2($id){ 
        $komen2 = Komen2::find($id); 
		$komen2->delete();         
		return redirect('/komen2');
	}

//---Komen 3
    public function komen3(){
		$komen3 = Komen3::all();
		return view('komen3',['komen3'=> $komen3]);
	}
	public function addkomen3(){ 
        return view('addkomen3');
	}
    //proses tambah data komentar
	public function createkomen3(Request $request) { 
        Komen3::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komen3');      
	}
    //Edit Komentar
	public function editkomen3($id){ 
        $komen3 = Komen3::find($id); 
        return view('editkomen3',['komen3'=>$komen3]);     
	}
	public function updatekomen3($id, Request $request) 
    { 
        $komen3 = Komen3::find($id); 
		$komen3->nama = $request->nama; 
		$komen3->nama_produk = $request->nama_produk;
        $komen3->komentar = $request->komentar;    
        $komen3->save(); 
		return redirect('/komen3');     
	}
    //Delete Komentar
	public function deletekomen3($id){ 
        $komen3 = Komen3::find($id); 
		$komen3->delete();         
		return redirect('/komen3');
	}

//---Komen 4
    public function komen4(){
		$komen4 = Komen4::all();
		return view('komen4',['komen4'=> $komen4]);
	}
	public function addkomen4(){ 
        return view('addkomen4');
	}
    //proses tambah data komentar
	public function createkomen4(Request $request) { 
        Komen4::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
            'komentar' => $request->komentar
        ]); 
        return redirect('/komen4');      
	}
    //Edit Komentar
	public function editkomen4($id){ 
        $komen4 = Komen4::find($id); 
        return view('editkomen4',['komen4'=>$komen4]);     
	}
	public function updatekomen4($id, Request $request) 
    { 
        $komen4 = Komen4::find($id); 
		$komen4->nama = $request->nama; 
		$komen4->nama_produk = $request->nama_produk;
        $komen4->komentar = $request->komentar;    
        $komen4->save(); 
		return redirect('/komen4');     
	}
    //Delete Komentar
	public function deletekomen4($id){ 
        $komen4 = Komen4::find($id); 
		$komen4->delete();         
		return redirect('/komen4');
	}

//---Komen 5
	public function komen5(){
		$komen5 = Komen5::all();
		return view('komen5',['komen5'=> $komen5]);
	}
	public function addkomen5(){ 
		return view('addkomen5');
	}
	//proses tambah data komentar
	public function createkomen5(Request $request) { 
		Komen5::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen5');      
	}
	//Edit Komentar
	public function editkomen5($id){ 
		$komen5 = Komen5::find($id); 
		return view('editkomen5',['komen5'=>$komen5]);     
	}
	public function updatekomen5($id, Request $request) 
	{ 
		$komen5 = Komen5::find($id); 
		$komen5->nama = $request->nama; 
		$komen5->nama_produk = $request->nama_produk;
		$komen5->komentar = $request->komentar;    
		$komen5->save(); 
		return redirect('/komen5');     
	}
	//Delete Komentar
	public function deletekomen5($id){ 
		$komen5 = Komen5::find($id); 
		$komen5->delete();         
		return redirect('/komen5');
	}

//---Komen 6
	public function komen6(){
		$komen6 = Komen6::all();
		return view('komen6',['komen6'=> $komen6]);
	}
	public function addkomen6(){ 
		return view('addkomen6');
	}
	//proses tambah data komentar
	public function createkomen6(Request $request) { 
		Komen6::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen6');      
	}
	//Edit Komentar
	public function editkomen6($id){ 
		$komen6 = Komen6::find($id); 
		return view('editkomen6',['komen6'=>$komen6]);     
	}
	public function updatekomen6($id, Request $request) 
	{ 
		$komen6 = Komen6::find($id); 
		$komen6->nama = $request->nama; 
		$komen6->nama_produk = $request->nama_produk;
		$komen6->komentar = $request->komentar;    
		$komen6->save(); 
		return redirect('/komen6');     
	}
	//Delete Komentar
	public function deletekomen6($id){ 
		$komen6 = Komen6::find($id); 
		$komen6->delete();         
		return redirect('/komen6');
	}

//---Komen 7
	public function komen7(){
		$komen7 = Komen7::all();
		return view('komen7',['komen7'=> $komen7]);
	}
	public function addkomen7(){ 
		return view('addkomen7');
	}
	//proses tambah data komentar
	public function createkomen7(Request $request) { 
		Komen7::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen7');      
	}
	//Edit Komentar
	public function editkomen7($id){ 
		$komen7 = Komen7::find($id); 
		return view('editkomen7',['komen7'=>$komen7]);     
	}
	public function updatekomen7($id, Request $request) 
	{ 
		$komen7 = Komen7::find($id); 
		$komen7->nama = $request->nama; 
		$komen7->nama_produk = $request->nama_produk;
		$komen7->komentar = $request->komentar;    
		$komen7->save(); 
		return redirect('/komen7');     
	}
	//Delete Komentar
	public function deletekomen7($id){ 
		$komen7 = Komen7::find($id); 
		$komen7->delete();         
		return redirect('/komen7');
	}

//---Komen 8
	public function komen8(){
		$komen8 = Komen8::all();
		return view('komen8',['komen8'=> $komen8]);
	}
	public function addkomen8(){ 
		return view('addkomen8');
	}
	//proses tambah data komentar
	public function createkomen8(Request $request) { 
		Komen8::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen8');      
	}
	//Edit Komentar
	public function editkomen8($id){ 
		$komen8 = Komen8::find($id); 
		return view('editkomen8',['komen8'=>$komen8]);     
	}
	public function updatekomen8($id, Request $request) 
	{ 
		$komen8 = Komen8::find($id); 
		$komen8->nama = $request->nama; 
		$komen8->nama_produk = $request->nama_produk;
		$komen8->komentar = $request->komentar;    
		$komen8->save(); 
		return redirect('/komen8');     
	}
	//Delete Komentar
	public function deletekomen8($id){ 
		$komen8 = Komen8::find($id); 
		$komen8->delete();         
		return redirect('/komen8');
	}
	
//---Komen 9
	public function komen9(){
		$komen9 = Komen9::all();
		return view('komen9',['komen9'=> $komen9]);
	}
	public function addkomen9(){ 
		return view('addkomen9');
	}
	//proses tambah data komentar
	public function createkomen9(Request $request) { 
		Komen9::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen9');      
	}
	//Edit Komentar
	public function editkomen9($id){ 
		$komen9 = Komen9::find($id); 
		return view('editkomen9',['komen9'=>$komen9]);     
	}
	public function updatekomen9($id, Request $request) 
	{ 
		$komen9 = Komen9::find($id); 
		$komen9->nama = $request->nama; 
		$komen9->nama_produk = $request->nama_produk;
		$komen9->komentar = $request->komentar;    
		$komen9->save(); 
		return redirect('/komen9');     
	}
	//Delete Komentar
	public function deletekomen9($id){ 
		$komen9 = Komen9::find($id); 
		$komen9->delete();         
		return redirect('/komen9');
	}

//---Komen 10
	public function komen10(){
		$komen10 = Komen10::all();
		return view('komen10',['komen10'=> $komen10]);
	}
	public function addkomen10(){ 
		return view('addkomen10');
	}
	//proses tambah data komentar
	public function createkomen10(Request $request) { 
		Komen10::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen10');      
	}
	//Edit Komentar
	public function editkomen10($id){ 
		$komen10 = Komen10::find($id); 
		return view('editkomen10',['komen10'=>$komen10]);     
	}
	public function updatekomen10($id, Request $request) 
	{ 
		$komen10 = Komen10::find($id); 
		$komen10->nama = $request->nama; 
		$komen10->nama_produk = $request->nama_produk;
		$komen10->komentar = $request->komentar;    
		$komen10->save(); 
		return redirect('/komen10');     
	}
	//Delete Komentar
	public function deletekomen10($id){ 
		$komen10 = Komen10::find($id); 
		$komen10->delete();         
		return redirect('/komen10');
	}

//---Komen 11
	public function komen11(){
		$komen11 = Komen11::all();
		return view('komen11',['komen11'=> $komen11]);
	}
	public function addkomen11(){ 
		return view('addkomen11');
	}
	//proses tambah data komentar
	public function createkomen11(Request $request) { 
		Komen11::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen11');      
	}
	//Edit Komentar
	public function editkomen11($id){ 
		$komen11 = Komen11::find($id); 
		return view('editkomen11',['komen11'=>$komen11]);     
	}
	public function updatekomen11($id, Request $request) 
	{ 
		$komen11 = Komen11::find($id); 
		$komen11->nama = $request->nama; 
		$komen11->nama_produk = $request->nama_produk;
		$komen11->komentar = $request->komentar;    
		$komen11->save(); 
		return redirect('/komen11');     
	}
	//Delete Komentar
	public function deletekomen11($id){ 
		$komen11 = Komen11::find($id); 
		$komen11->delete();         
		return redirect('/komen11');
	}

//---Komen 12
	public function komen12(){
		$komen12 = Komen12::all();
		return view('komen12',['komen12'=> $komen12]);
	}
	public function addkomen12(){ 
		return view('addkomen12');
	}
	//proses tambah data komentar
	public function createkomen12(Request $request) { 
		Komen12::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen12');      
	}
	//Edit Komentar
	public function editkomen12($id){ 
		$komen12 = Komen12::find($id); 
		return view('editkomen12',['komen12'=>$komen12]);     
	}
	public function updatekomen12($id, Request $request) 
	{ 
		$komen12 = Komen12::find($id); 
		$komen12->nama = $request->nama; 
		$komen12->nama_produk = $request->nama_produk;
		$komen12->komentar = $request->komentar;    
		$komen12->save(); 
		return redirect('/komen12');     
	}
	//Delete Komentar
	public function deletekomen12($id){ 
		$komen12 = Komen12::find($id); 
		$komen12->delete();         
		return redirect('/komen12');
	}

//---Komen 13
	public function komen13(){
		$komen13 = Komen13::all();
		return view('komen13',['komen13'=> $komen13]);
	}
	public function addkomen13(){ 
		return view('addkomen13');
	}
	//proses tambah data komentar
	public function createkomen13(Request $request) { 
		Komen13::create([ 
			'nama' => $request->nama, 
			'nama_produk' => $request->nama_produk,
			'komentar' => $request->komentar
		]); 
		return redirect('/komen13');      
	}
	//Edit Komentar
	public function editkomen13($id){ 
		$komen13 = Komen13::find($id); 
		return view('editkomen13',['komen13'=>$komen13]);     
	}
	public function updatekomen13($id, Request $request) 
	{ 
		$komen13 = Komen13::find($id); 
		$komen13->nama = $request->nama; 
		$komen13->nama_produk = $request->nama_produk;
		$komen13->komentar = $request->komentar;    
		$komen13->save(); 
		return redirect('/komen13');     
	}
	//Delete Komentar
	public function deletekomen13($id){ 
		$komen13 = Komen13::find($id); 
		$komen13->delete();         
		return redirect('/komen13');
	}
}
