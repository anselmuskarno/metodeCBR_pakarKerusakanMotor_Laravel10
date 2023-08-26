<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\HitungController;

use App\Models\User;
use App\Models\Gejalamotor;
use App\Models\Kerusakanmotor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('home', [
        'gejala' => Gejalamotor::All(),
        'total_gejala' => Gejalamotor::count()
    ]);
});
Route::get('/hasil', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('hasil', [
        'gejala' => Gejalamotor::All(),
        'total_gejala' => Gejalamotor::count()
    ]);
});
Route::get('/login', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view(
        'login'
    );
});

Route::get('/gejala', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('admin/gejala', [
        'gejala' => Gejalamotor::All(),
        'kerusakan' => Kerusakanmotor::All()
    ]);
});

Route::get('/kerusakan', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('admin/kerusakan', [
        'kerusakan' => Kerusakanmotor::All()
    ]);
});

Route::get('/profil', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('admin/profil');
});

Route::get('/dashboard', function () {
    // $sorted = Bahasa::All()->sortBy('bahasa_indonesia');
    return view('admin/dashboard', [
        'admin' => User::count(),
        'gejala' => Gejalamotor::count(),
        'kerusakan' => Kerusakanmotor::count(),
    ]);
});

Route::post('/tambahGejala', [GejalaController::class, 'tambahGejala']);
Route::post('/hapusGejala', [GejalaController::class, 'hapusGejala']);
Route::post('/editGejala', [GejalaController::class, 'editGejala']);

Route::post('/hitungTeoremaBayes', [HitungController::class, 'hitung']);
Route::post('/loginAdmin', [LoginController::class, 'loginAdmin']);

Route::post('/tambahKerusakan', [KerusakanController::class, 'tambahKerusakan']);
Route::post('/hapusKerusakan', [KerusakanController::class, 'hapusKerusakan']);
Route::post('/editKerusakan', [KerusakanController::class, 'editKerusakan']);
