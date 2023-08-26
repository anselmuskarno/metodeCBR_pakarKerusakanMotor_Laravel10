<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakanmotor;
use Illuminate\Support\Facades\Storage;


class KerusakanController extends Controller
{
    public function hapusKerusakan(Request $request)
    {
        $kerusakan = Kerusakanmotor::find($request->id_kerusakan);
        $kerusakan->delete();

        return redirect('/kerusakan');
    }

    public function editKerusakan(Request $request)
    {

        $validateData = $request->validate([
            'kode_kerusakan' => '',
            'nama_kerusakan' => ''
        ]);

        $kerusakan           = Kerusakanmotor::find($request->id_kerusakan);
        $kerusakan->kode_kerusakan    = $validateData['kode_kerusakan'];
        $kerusakan->nama_kerusakan  = $validateData['nama_kerusakan'];
        $kerusakan->save();
        return redirect('/kerusakan');
    }

    public function tambahKerusakan(Request $request)
    {

        $validateData = $request->validate([
            'kode_kerusakan' => '',
            'nama_kerusakan' => ''
        ]);
        // return $request->kode_kerusakan;
        Kerusakanmotor::create($validateData);

        return redirect('/kerusakan');
    }
}
