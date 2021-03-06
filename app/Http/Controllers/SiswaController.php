<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pendaftaran',['page'=>'daftar', 'page_title' => 'Formulir Pendaftaran']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            // 'nisn' => 'required', 
            'nik' => 'required', 
            'nama' => 'required', 
            'asal_sekolah'=> 'required',
            'jk'=> 'required', 
            'tempat_lahir'=> 'required', 
            'tanggal_lahir'=> 'date_format:d-m-Y', 
            'agama'=> 'required', 
            'alamat'=> 'required', 
            'desa'=> 'required', 
            'kec'=> 'required', 
            'kab'=> 'required', 
            'kewarganegaraan', 
            'nama_ibu'=> 'required', 
            // 'hp', 
            'email' => 'email'
        ],[
            'nik.required' => 'Harus Diisi, Lihat di Kartu Kelluarga',
            'nama.required' => 'harus Diisi',
            'asal_sekolah.required' => 'Harus diisi, isi "tidak sekolah" jika tidak masuk TK',
            'jk.required' => 'Pilih Jenis Kelamin',
            'tempat_lahir.required' => 'Harus Diisi',
            'tanggal_lahir.date' => 'Harus Diisi',
            'agama.required' => 'Harus diisi',
            'alamat.required' => 'Harus diisi',
            'desa.required' => 'Harus diisi',
            'kec.required' => 'Harus diisi',
            'kab.required' => 'Harus diisi',
            'nama_ibu.required' => 'Harus diisi',
            'email.email' => 'Pastikan format email benar.Contoh: email@gmal.com',
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)
                        ->withInput();
        }
        // dd($request->all());
        return redirect()->route('home');
        // dd($valid);
        // try {
        //     Siswa::updateOrCreate(
        //         ['nik' => $request->nik],
        //         ['nisn' => $request->nisn],
        //         ['nama' => $request->nama],
        //         ['asal_sekolah' => $request->asal_sekolah],
        //         ['jk' => $request->jk],
        //         ['tempat_lahir' => $request->tempat_lahir],
        //         ['tanggal_lahir' => $request->tanggal_lahir],
        //         ['agama' => $request->agama],
        //         ['alamat' => $request->alamat],
        //         ['desa' => $request->desa],
        //         ['kec' => $request->kec],
        //         ['kab' => $request->kab],
        //         ['nama_ibu' => $request->nama_ibu],
        //         ['hp' => $request->hp],
        //         ['email' => $request->email],
        //     );
        //     return redirect('home')->with(['success' => true, 'message' => 'Selamat, Ananda '.$request->nama.' telah terdaftar di sistem PPDB SD Negeri 1 Bedalisodo.']);
        // } catch (\Exception $e)
        // {
        //     return back()->withErrors($e->getCode().':'.$e->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
