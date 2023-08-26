<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejalamotor;
use Illuminate\Support\Facades\Storage;


class GejalaController extends Controller
{
    public function hapusGejala(Request $request)
    {
        $gejala = Gejalamotor::find($request->id_gejala);
        $gejala->delete();

        return redirect('/gejala');
    }

    public function editGejala(Request $request)
    {

        $validateData = $request->validate([
            'kode_gejala' => '',
            'bobot_gejala' => '',
            'jenis_gejala' => '',
            'kode_kerusakan' => '',
        ]);

        $gejala           = Gejalamotor::find($request->id_gejala);
        $gejala->kode_gejala    = $validateData['kode_gejala'];
        $gejala->bobot_gejala    = $validateData['bobot_gejala'];
        $gejala->jenis_gejala  = $validateData['jenis_gejala'];
        $gejala->kode_kerusakan  = $validateData['kode_kerusakan'];
        $gejala->save();
        return redirect('/gejala');
    }

    public function tambahGejala(Request $request)
    {

        $validateData = $request->validate([
            'kode_gejala' => '',
            'bobot_gejala' => '',
            'jenis_gejala' => '',
            'kode_kerusakan' => '',
        ]);
        // return $request->kode_gejala;
        Gejalamotor::create($validateData);

        return redirect('/gejala');
    }
}
