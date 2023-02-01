<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BarangFormRequest;

class C_Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'max:255'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('login-succes','Selamat datang');
        }
        else{
            return redirect('/')->with('errors', 'Login Failed!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('logout' , 'Anda Telah Logout');
    }

    // public function register()
    // {
    //     return view('register');
    // }

    public function dashboard()
    {
        $kategori = Kategori::all();
        return view('dashboard' , compact('kategori'));
        // return view('dashboard');
    }
     
    public function viewCategory($category_slug)
    {
        $category = Kategori::where('slug', $category_slug)->first();
        if ($category)
        {
            $barangs = Barang::where('kategori_id', $category->id)->paginate(2);
            return view('kategoris', compact('barangs','category'));
        }
        else
        {
            return redirect('/');
        }
    }


    public function tambahData()
    {
        //$barang = Barang::where('kategori_id')->get();
        //$kategori = Kategori::where('name')->get();
        $kategori = Kategori::all();
        return view('tambahData' , compact('kategori'));
    }

    public function createData(BarangFormRequest $request)
    {
            $data = $request->validated();
    
            $barang = new Barang;
            $barang->kategori_id = $data['kategori_id'];
            $barang->nama_barang = $data['nama_barang'];
            $barang->no_seri = $data['no_seri'];
            $barang->deskripsi = $data['deskripsi'];
            $barang->stok = $data['stok'];
            $barang->harga = $data['harga'];
            $barang->gambar = $data['gambar'];
            if($request->hasfile('gambar')){
                $file = $request->file('gambar');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('img/uploads/', $filename);
                $barang->gambar = $filename;
            }
            $barang->save();

            $kategori = Kategori::findOrFail($barang->kategori_id);
        
            return redirect('/dashboard')->with('success','Posts created successfully.');
        
    
        // $barang = new Barang;
        // $barang->nama_barang = $request->nama_barang;
        // $barang->no_seri = $request->no_seri;
        // $barang->kategori_id = $request->kategori;
        // $barang->harga = $request->harga;
        // $barang->stok = $request->stok;
        // $barang->deskripsi = $request->deskripsi;
        // $barang->gambar = $request->foto;
        // $barang->save();
        // return redirect()->intended('kategoris')->with('sukses','Produk berhasil di tambahkan');
    }

    public function edit()
    {

    }

    public function update(BarangFormRequest $request, $kategori_id)
    {
    	$data = $request->validated();

    	$kategori = Kategori::find($kategori_id);

    	$kategori->name = $data['name'];
    	$kategori->slug = Str::slug($data['slug']);
    	$kategori->desc = $data['desc'];



    	if($request->hasfile('gambar')){

    	$destination = 'uploads/kategori/'.$kategori->image;
    	if(File::exists($destination)){
 		File::delete($destination);
    	}
    	$file = $request->file('image');
    	$filename = time() . '.' . $file->getClientOriginalExtension();
    	$file->move('uploads/kategori/', $filename);
    	$kategori->image = $filename;
    	}

    	$kategori->meta_title = $data['meta_title'];
    	$kategori->meta_descs = $data['meta_descs'];
    	$kategori->meta_keyword = $data['meta_keyword'];

    	$kategori->navbar_status = $request->navbar_status == true ? '1':'0';
    	$kategori->status = $request->status == true ? '1':'0';
    	$kategori->created_by = Auth::user()->id;
    	$kategori->update();

    	return redirect()->route('kategoris.index')
                        ->with('success','Category Updated successfully.');
    }

    
}