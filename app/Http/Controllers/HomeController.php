<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Products;
use Storage;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Products::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        $input = $this->validate($request, [
            'name'=>'required',
            'price'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);        

        // Upload Foto
        if ($request->hasFile('image')) {
            $input['image'] = $this->uploadFoto($request);
        }

        //Simpan data siswa
        Products::create($input);

        return redirect('home');
    }

    public function edit($id)
    {
        $data = Products::findOrFail($id);
        return view('product.edit', compact('data'));
    }

    public function update($id, Request $request){
        $data = Products::findOrFail($id);
        $input = $request->all();
        $input = $this->validate($request, [
            'name'=>'required',
            'price'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);        

        // Upload Foto
        if ($request->hasFile('image')) {
            $input['image'] = $this->uploadFoto($request);
        }

        $data->update($input);
        return redirect('home');
    }

    public function destroy($id)
    {
        $data = Products::findOrFail($id);
        $this->hapusFoto($data);
        $data->delete();
        return redirect('home');
    }

    private function uploadFoto(Request $request)
    {
        $foto = $request->file('image');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('image')->isValid()) {
            $foto_name   = date('YmdHis'). ".$ext";
            $upload_path = 'images';
            $request->file('image')->move($upload_path, $foto_name);

            // Filename untuk database --> 20160220214738.jpg
            return $foto_name;
        }
        return false;
    }

    private function hapusFoto(Products $products)
    {
        $exist = Storage::disk('foto')->exists($products->image);

        if (isset($products->image) && $exist) {
            $delete = Storage::disk('foto')->delete($products->image);
            if ($delete) {
                return true;
            }
            return false;
        }
    }
}
