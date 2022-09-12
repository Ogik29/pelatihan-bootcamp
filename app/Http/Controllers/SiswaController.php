<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\NilaiMapel;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Siswa::latest()->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        $nilai_mapel = [];

        foreach ($siswa->nilai_mapel as $snp) {

            $nilai_mapel['id'] = $snp->id;
            $nilai_mapel['nama_mapel'] = $snp->mapel->nama_mapel;
            $nilai_mapel['rata_rata'] = $snp->rata_rata;

            $data[] = $nilai_mapel;
        }

        return [
            'siswa' => ['nama' => $siswa->nama, 'kelas' => $siswa->kelas->nama_kelas],
            'nilai' => $data
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        //
    }

    public function getDetailNilai($nilai_id)
    {
        $nama_siswa = NilaiMapel::find($nilai_id)->siswa->nama;
        $nama_mapel = NilaiMapel::find($nilai_id)->mapel->nama_mapel;
        $detail_nilai = NilaiMapel::find($nilai_id);

        return ['nama_siswa' => $nama_siswa, 'mapel' => $nama_mapel, 'detail_nilai' => $detail_nilai];
    }
}
