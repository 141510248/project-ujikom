<?php

namespace App\Http\Controllers;

use Request;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class PegawaiController extends Controller
{
        use RegistersUsers;

    public function index()
    {
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();
        $pegawais = Pegawai::all();
        return view('pegawais.index', compact('jabatans', 'golongans', 'pegawais'));
    }
     public function create()
    {
       
        $jabatans=Jabatan::all();
        $golongans=Golongan::all();
        $users=User::all();
        return view('pegawais.create',compact('jabatans','golongans','users'));
    }

    public function store(Request $request)
    {
         
         $input = Request::all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'permission' => $input['permission'],

        ]); 

       
         if($request->hasfile('Photo')){
//mengambil file yang di upload
$uploaded_Photo = $request->file('Photo');
//mengambil extension file
$extension = 
$uploaded_Photo->getClientOriginalExtension();
//membuat nama file random berikut extension
$filename = md5(time() ) .'.'. $extension;
//menyimpan covet ke folder public/img
$destinationPath = public_path() . 
DIRECTORY_SEPARATOR . 'img';
$uploaded_Photo->move($destinationPath. $filename);
//mengisi field cover di book dengan filename yang baru dibuat
        
//ganti field cover dengan cover yang abru
$input->Photo = $filename;
$input->save();
}
        return redirect('pegawais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawais=Pegawai::find($id);
        return view('pegawais.show',compact('pegawais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawais = Pegawai::find($id);
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();

        return view('pegawais.edit', compact('pegawais', 'jabatans', 'golongans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawais = Pegawai::find($id);

         if($request->hasfile('Photo')){
//mengambil file yang di upload
$uploaded_Photo = $request->file('Photo');
//mengambil extension file
$extension = 
$uploaded_Photo->getClientOriginalExtension();
//membuat nama file random berikut extension
$filename = md5(time() ) .'.'. $extension;
//menyimpan covet ke folder public/img
$destinationPath = public_path() . 
DIRECTORY_SEPARATOR . 'img';
$uploaded_Photo->move($destinationPath. $filename);
//mengisi field cover di book dengan filename yang baru dibuat
if($pegawais->Photo) {
    $old_cover = $pegawais->Photo;
    $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' .
    DIRECTORY_SEPARATOR . $pegawais->Photo;
    try{
        file::delete($filepath);
    } catch (fileNotFoundException $e) {
            //file sudah dihapus/tidak ada
    }
}
//ganti field cover dengan cover yang abru
$pegawais->Photo = $filename;
$pegawais->save();
}
        $pegawais->Nip = Request::get('Nip'); 
        $pegawais->jabatan_id = Request::get('jabatan_id'); 
        $pegawais->golongan_id = Request::get('golongan_id'); 
        $pegawais->Photo = $filename;
        $pegawais->save();
        
        return redirect('pegawais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect('pegawais');
    }

}
