<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejalamotor;
use Illuminate\Support\Facades\Storage;
// use PhpParser\Node\Stmt\Echo_;

class HitungController extends Controller
{

    public function hitung(Request $request)
    {
        // echo "Total Gejala = " . $request->total_gejala . "<br><br>";
        echo "gejala 1 = " . $request->bobot_gejala1 . "<br>";
        $penjumlahanProbabilitasK01 = 0;
        $penjumlahanProbabilitasK02 = 0;
        $penjumlahanProbabilitasK03 = 0;
        $penjumlahanProbabilitasK04 = 0;

        $h1 = 0;
        $h2 = 0;
        $h3 = 0;
        $h4 = 0;

        $hasilAkhirK01 = 0;
        $hasilAkhirK02 = 0;
        $hasilAkhirK03 = 0;
        $hasilAkhirK04 = 0;


        // echo "Langkah Pertama =============================================================<br>";
        for ($i = 1; $i < $request->total_gejala + 1; $i++) {
            $bobot_gejala = "bobot_gejala$i";
            $kode_kerusakan = "kode_kerusakan$i";
            $kode_gejala = "kode_gejala$i";
            // echo "Bobot ke " . $i . " = " . $request->$bobot_gejala . "<br>";
            if ($request->$bobot_gejala != null) {
                if ($request->$kode_kerusakan == "K01") {
                    // echo "K01 = Kerusakan Mesin <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo "Kode gejala " . $request->$kode_gejala . ", memiliki bobot " .
                    //     $request->$bobot_gejala . ", kode kerusakan " . $request->$kode_kerusakan . "<br>";
                    $penjumlahanProbabilitasK01 = $penjumlahanProbabilitasK01 + $request->$bobot_gejala;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K02") {
                    // echo "K02 = Kerusakan Listrik <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo "Kode gejala " . $request->$kode_gejala . ", memiliki bobot " .
                    //     $request->$bobot_gejala . ", kode kerusakan " . $request->$kode_kerusakan . "<br>";
                    $penjumlahanProbabilitasK02 = $penjumlahanProbabilitasK02 + $request->$bobot_gejala;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K03") {
                    // echo "K03 = Kerusakan Pengapian <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo "Kode gejala " . $request->$kode_gejala . ", memiliki bobot " .
                    //     $request->$bobot_gejala . ", kode kerusakan " . $request->$kode_kerusakan . "<br>";
                    $penjumlahanProbabilitasK03 = $penjumlahanProbabilitasK03 + $request->$bobot_gejala;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K04") {
                    // echo "K04 = Kerusakan Penggerak roda <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo "Kode gejala " . $request->$kode_gejala . ", memiliki bobot " .
                    //     $request->$bobot_gejala . ", kode kerusakan " . $request->$kode_kerusakan . "<br>";
                    $penjumlahanProbabilitasK04 = $penjumlahanProbabilitasK04 + $request->$bobot_gejala;
                    // echo  "<br>";
                }
            }
        }


        // echo "Langkah kedua =============================================================<br>";
        // echo "Hasil penjumlahan Probabilitas K01 = " . $penjumlahanProbabilitasK01 . "<br>";
        // echo "Hasil penjumlahan Probabilitas K02 = " . $penjumlahanProbabilitasK02 . "<br>";
        // echo "Hasil penjumlahan Probabilitas K03 = " . $penjumlahanProbabilitasK03 . "<br>";
        // echo "Hasil penjumlahan Probabilitas K04 = " . $penjumlahanProbabilitasK04 . "<br>";


        // echo "<br>";
        // echo "<br>";
        // echo "Langkah Ketiga =============================================================<br>";
        for ($i = 1; $i < $request->total_gejala + 1; $i++) {
            $bobot_gejala = "bobot_gejala$i";
            $kode_kerusakan = "kode_kerusakan$i";
            $kode_gejala = "kode_gejala$i";

            if ($request->$bobot_gejala != null) {
                if ($request->$kode_kerusakan == "K01") {
                    // echo "K01 = Kerusakan Mesin <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = $request->$bobot_gejala / $penjumlahanProbabilitasK01;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K02") {
                    // echo "K02 = Kerusakan Listrik <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = $request->$bobot_gejala / $penjumlahanProbabilitasK02;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K03") {
                    // echo "K03 = Kerusakan Pengapian <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = $request->$bobot_gejala / $penjumlahanProbabilitasK03;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K04") {
                    // echo "K04 = Kerusakan Penggerak roda <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = $request->$bobot_gejala / $penjumlahanProbabilitasK04;
                    // echo  "<br>";
                }
            }
        }

        // echo "<br>";
        // echo "<br>";
        // echo "Langkah Keempat =============================================================<br>";
        for ($i = 1; $i < $request->total_gejala + 1; $i++) {
            $bobot_gejala = "bobot_gejala$i";
            $kode_kerusakan = "kode_kerusakan$i";
            $kode_gejala = "kode_gejala$i";

            if ($request->$bobot_gejala != null) {
                if ($request->$kode_kerusakan == "K01") {
                    $h1 += ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK01));
                    "<br>";
                }
                if ($request->$kode_kerusakan == "K02") {
                    $h2 += ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK02));
                    "<br>";
                }
                if ($request->$kode_kerusakan == "K03") {
                    $h3 += ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK03));
                    "<br>";
                }
                if ($request->$kode_kerusakan == "K04") {
                    $h4 += ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK04));
                    "<br>";
                }
            }
        }
        // echo "Hasil h1 = " . $h1 . "<br>";
        // echo "Hasil h2 = " . $h2 . "<br>";
        // echo "Hasil h3 = " . $h3 . "<br>";
        // echo "Hasil h4 = " . $h4 . "<br>";


        // echo "<br>";
        // echo "<br>";
        // echo "Langkah Kelima =============================================================<br>";
        for ($i = 1; $i < $request->total_gejala + 1; $i++) {
            $bobot_gejala = "bobot_gejala$i";
            $kode_kerusakan = "kode_kerusakan$i";
            $kode_gejala = "kode_gejala$i";

            if ($request->$bobot_gejala != null) {
                if ($request->$kode_kerusakan == "K01") {
                    // echo "K01 = Kerusakan Mesin <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK01)) / $h1;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K02") {
                    // echo "K02 = Kerusakan Listrik <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK02)) / $h2;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K03") {
                    // echo "K03 = Kerusakan Pengapian <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK03)) / $h3;
                    // echo  "<br>";
                }
                if ($request->$kode_kerusakan == "K04") {
                    // echo "K04 = Kerusakan Penggerak roda <br>";
                    // echo $request->$kode_gejala . " = P(E|H$i) = " . $request->$bobot_gejala . "<br>";
                    // echo $request->$kode_gejala = ($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK04)) / $h4;
                    // echo  "<br>";
                }
            }
        }

        // echo "<br>";
        // echo "<br>";
        // echo "Langkah Keenam (HASIL AKHIR) =============================================================<br>";
        for ($i = 1; $i < $request->total_gejala + 1; $i++) {
            $bobot_gejala = "bobot_gejala$i";
            $kode_kerusakan = "kode_kerusakan$i";
            $kode_gejala = "kode_gejala$i";

            if ($request->$bobot_gejala != null) {
                if ($request->$kode_kerusakan == "K01") {
                    $hasilAkhirK01 += $request->$bobot_gejala * (($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK01)) / $h1);
                }
                if ($request->$kode_kerusakan == "K02") {
                    $hasilAkhirK02 += $request->$bobot_gejala * (($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK02)) / $h2);
                }
                if ($request->$kode_kerusakan == "K03") {
                    $hasilAkhirK03 += $request->$bobot_gejala * (($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK03)) / $h3);
                }
                if ($request->$kode_kerusakan == "K04") {
                    $hasilAkhirK04 += $request->$bobot_gejala * (($request->$bobot_gejala * ($request->$bobot_gejala / $penjumlahanProbabilitasK04)) / $h4);
                }
            }
        }

        // echo "a. K01 = Kerusakan Mesin " . $hasilAkhirK01 . "<br>";
        // echo "b. K02 = Kerusakan Kelistrikan " . $hasilAkhirK02 . "<br>";
        // echo "c. K03 = Kerusakan Pengapian " . $hasilAkhirK03 . "<br>";
        // echo "d. K04 = Kerusakan Penggerak Roda " . $hasilAkhirK04 . "<br>";

        return view('hasil', [
            'k01' => $hasilAkhirK01,
            'k02' => $hasilAkhirK02,
            'k03' => $hasilAkhirK03,
            'k04' => $hasilAkhirK04
        ]);

        // return redirect('/hasil');
    }
}
