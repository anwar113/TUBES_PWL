<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baru;
use App\Women;
use App\Men;
use App\Kids;
use App\transaksi;
use App\User;
use PDF;

class ManageController extends Controller
{
//gate
public function __construct()
{
 $this->middleware('auth');
 /*$this->middleware(function($request, $next){
 if(Gate::allows('user-display')) return $next($request);
 abort(403, 'Anda tidak memiliki cukup hak akses');
 }); */
}

    /*home
    public function home(){
        return view('home2');
    }
*/
//------------------------Baru----------------------------
    //tampil produk terbaru home
    public function tampilTerbaru()
    {
        $baru = Baru::all();
        return view ('home2', ['baru' => $baru]);

        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }
    //tampil produk terbaru manage
    public function baru()
    {
        $baru = Baru::all();
        return view ('manageProdukTerbaru', ['baru' => $baru]);
        $value = Cache::remember('barus', $seconds, function () {
            return DB::table('barus')->get();
        });
    }
    //halaman tambah data produk baru
    public function addTerbaru()
    {
        return view('addBaru');
    }
    //proses penambahan data produk baru
    public function createTerbaru(Request $request)
    {
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Baru::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $image_name,
        ]);
        return redirect('/baru');
    }
    //halaman edit data produk baru
    public function editTerbaru($id)
    {
        $baru = Baru::find($id);
        return view('editBaru',['baru'=>$baru]);
    }
    //proses update data baru
    public function updateTerbaru($id, Request $request)
    {
        $baru = Baru::find($id);
        $baru->nama = $request->nama;
        $baru->harga = $request->harga;
        
        if($baru->gambar && file_exists(storage_path('app/public/' . $baru->gambar)))
        {
            \Storage::delete('public/'.$baru->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $baru->gambar = $image_name;

        $baru->save();
        return redirect('/baru');
    }
    //proses hapus data produk baru
    public function deleteTerbaru($id)
    {
        $baru = Baru::find($id);
        $baru->delete();
        return redirect('/baru');
    }
    //cetak pdf produk baru
    public function cetakTerbaru() {
        $baru = Baru::all();
        $pdf = PDF::loadview('barus_pdf',['baru'=>$baru]);
        return $pdf->stream();
    }

//------------------------Men----------------------------
    //tampil produk manage men
    public function men()
    {
        $men = Men::all();
        return view ('manageProdukMen', ['men' => $men]);

        $value = Cache::remember('mens', $seconds, function () {
            return DB::table('mens')->get();
        });
    }

    //halaman tambah data produk man
    public function addMen()
    {
        return view('addMen');
    }
    //proses penambahan data produk man
    public function createMen(Request $request)
    {
        //$inputValue = $request->all();
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }
    //proses penambahan data produk men
    Men::create([
        'nama_produk' => $request->nama_produk,
        'keterangan' => $request->keterangan,
        'harga' => $request->harga,
        'jenis' => $request->jenis,
        $arrayToString = implode(',',$request->input('ukuran')),
        'ukuran' => $arrayToString,
        'stok' => $request->stok,
        'gambar' => $image_name,
        ]);
        return redirect('/men');
    }
    
    //halaman edit data produk men
    public function editMen($id)
    {
        $men= Men::find($id);
        return view('editMen',['men'=>$men]);
    }
    //proses update data produk man
    public function updateMen($id, Request $request)
    {
        $men = Men::find($id);
        $men->nama_produk = $request->nama_produk;
        $men->keterangan = $request->keterangan;
        $men->harga = $request->harga;
        $men->jenis = $request->jenis;
        $arrayToString = implode(',',$request->input('ukuran'));
        $men->ukuran = $arrayToString;
        $men->stok = $request->stok;
        
        if($men->gambar && file_exists(storage_path('app/public/' . $men->gambar)))
        {
            \Storage::delete('public/'.$men->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $men->gambar = $image_name;

        $men->save();
        return redirect('/men');
    }

    //cetak pdf
    public function cetakMen() {
        $men = Men::all();
        $pdf = PDF::loadview('mens_pdf',['men'=>$men]);
        return $pdf->stream();
    }

    //proses hapus data produk men
    public function deleteMen($id)
    {
        $men = Men::find($id);
        $men->delete();
        return redirect('/men');
    }

//------------------------Women----------------------------
    //tampil produk manage woman
    public function women()
    {
        $women = Women::all();
        return view ('manageProdukWomen', ['women' => $women]);

        $value = Cache::remember('womens', $seconds, function () {
            return DB::table('womens')->get();
        });
    }
    //halaman tambah data produk woman
    public function addWomen()
    {
        return view('addWomen');
    }
    //proses penambahan data produk woman
    public function createWomen(Request $request)
    {
        //$inputValue = $request->all();
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Women::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            $arrayToString = implode(',',$request->input('ukuran')),
            'ukuran' => $arrayToString,
            'stok' => $request->stok,
            'gambar' => $image_name,
        ]);
        return redirect('/women');
    }
    //halaman edit data produk woman
    public function editWomen($id)
    {
        $women= Women::find($id);
        return view('editWomen',['women'=>$women]);
    }
    //proses update data produk woman
    public function updateWomen($id, Request $request)
    {
        $women = Women::find($id);
        $women->nama_produk = $request->nama_produk;
        $women->keterangan = $request->keterangan;
        $women->harga = $request->harga;
        $women->jenis = $request->jenis;
        $arrayToString = implode(',',$request->input('ukuran'));
        $women->ukuran = $arrayToString;
        $women->stok = $request->stok;
        
        if($women->gambar && file_exists(storage_path('app/public/' . $women->gambar)))
        {
            \Storage::delete('public/'.$women->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $women->gambar = $image_name;

        $women->save();
        return redirect('/women');
    }
    //proses hapus data produk woman
    public function deleteWomen($id)
    {
        $women = Women::find($id);
        $women->delete();
        return redirect('/women');
    }
    //cetak pdf
    public function cetakWomen() {
        $women = Women::all();
        $pdf = PDF::loadview('womens_pdf',['women'=>$women]);
        return $pdf->stream();
    }

    //------------------------kid----------------------------
    //tampil data
    public function kid()
    {
        $kid = Kids::all();
        return view ('manageProdukKid', ['kid' => $kid]);

        $value = Cache::remember('kids', $seconds, function () {
            return DB::table('kids')->get();
        });
    }  
    //tambah data kid
    public function addKid()
    {
        return view('addKid');
    }
    //proses tambah data kid 
    public function createKid(Request $request)
    {
        //$inputValue = $request->all();
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Kids::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jenis' => $request->jenis,
            $arrayToString = implode(',',$request->input('ukuran')),
            'ukuran' => $arrayToString,
            'stok' => $request->stok,
            'gambar' => $image_name,
        ]);
        return redirect('/kid');
    }
    //Edit data kid
     public function editKid($id)
    {
        $kid= Kids::find($id);
        return view('editKid',['kid'=>$kid]);
    }
    //update data kid
    public function updateKid($id, Request $request)
    {
        $kid = Kids::find($id);
        $kid->nama_produk = $request->nama_produk;
        $kid->keterangan = $request->keterangan;
        $kid->harga = $request->harga;
        $kid->jenis = $request->jenis;
        $arrayToString = implode(',',$request->input('ukuran'));
        $kid->ukuran = $arrayToString;
        $kid->stok = $request->stok;
        
        if($kid->gambar && file_exists(storage_path('app/public/' . $kid->gambar)))
        {
            \Storage::delete('public/'.$kid->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $kid->gambar = $image_name;

        $kid->save();
        return redirect('/kid');
    }
     //hapus data kid
    public function deleteKid($id)
    {
        $kid = Kids::find($id);
        $kid->delete();
        return redirect('/kid');
    }
    //cetak pdf kid
    public function cetakKid() {
        $kid = Kids::all();
        $pdf = PDF::loadview('kids_pdf',['kid'=>$kid]);
        return $pdf->stream();
    }  

    //-------------------how to buy------------------
    //tampil how to buy
    public function howToBuy() {
        return view('howToBuy');
    }

    //-------------------sale------------------
    //tampil sale
    public function sale(){
        return view('sale');
    }


    //-------------------transaksi------------------
    //tampil manage transaksi
    public function transaksi(){
        $transaksi =transaksi::all();
        return view('manageTransaksi',['transaksi' => $transaksi]);

        $value=cache::remember('transaksis',$seconds,function(){
            return db::table('transaksis')->get();
        });
    }
    //tambah transaksi
    public function addMenTransaksi($id){
        $men=Men::find($id);
        return view('addMenTransaksi',['men'=>$men]);
    }
    //proses tambah transaksi
    public function createTransaksi(Request $request){
        //$total_harga==$request->harga*$request->jumlah_beli;
        //if($request->file('gambar')) {
        //    $image_name = $request->file('gambar')->store('images','public');
        //}
        transaksi::create([
            'id_produk'=>$request->id_produk,
            'nama_produk'=>$request->nama_produk,
            'kategori_produk'=>$request->kategori_produk,
            'gambar'=>$request->gambar,
            'harga'=>$request->harga,
            'status'=>$request->status,
            'total_harga'=>$request->total_harga,
            'ukuran' => $request->ukuran,
            'jumlah_beli'=> $request->jumlah_beli,
            'nama_pembeli'=> $request->nama_pembeli,
            'no_telepon_pembeli'=> $request->no_telepon_pembeli,
            'alamat_pembeli'=> $request->alamat_pembeli,

        ]);
        return redirect('/transaksi/sukses');
    }


    //----------------User
    
    public function manageUser()
    {
        $user = User::all();
        return view ('manageUser', ['user' => $user]);

        $value = Cache::remember('users', $seconds, function () {
            return DB::table('users')->get();
        });
    }
    //halaman tambah data produk baru
    public function addUser()
    {
        return view('addUser');
    } 
    //proses penambahan data produk baru
  public function createUser(Request $request)
    {
        if($request->file('gambar')) {
            $image_name = $request->file('gambar')->store('images','public');
        }

        Baru::create([
            'name' => $request->name,
            'email' => $request->email,
            'roles'=>$request->roles,
            'gambar' => $image_name,
        ]);
        return redirect('/manageUser');
    } 
    //halaman edit data produk baru
    
    public function editUser($id)
    {
        $user = user::find($id);
        return view('editUser',['user'=>$user]);
    }
    //proses update data baru
    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles=$request->roles;
        
        if($user->gambar && file_exists(storage_path('app/public/' . $user->gambar)))
        {
            \Storage::delete('public/'.$user->gambar);
        }
        $image_name = $request->file('gambar')->store('images', 'public');
        $user->gambar = $image_name;

        $user->save();
        return redirect('/manageUser');
    }
    
    //proses hapus data produk baru
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/manageUser');
    }
    //cetak pdf produk baru
    public function cetakUser() {
        $user = User::all();
        $pdf = PDF::loadview('user_pdf',['user'=>$user]);
        return $pdf->stream();
    }
    

}


