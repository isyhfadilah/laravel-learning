<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes / jalur / jalan
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about/index', [
        "name" => "Aisyah Nur Fadilah",
        "position" => "junior front-end developer",
        "img" => "assets/profil.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('blog/index', [
        "headline" => "Megawati: 51 Years We Are Like This Not Because of the President, But the People",
        "description" => "PDIP General Chair Megawati Soekarnoputri gives a speech at the PDIP 51st Anniversary celebration. Megawati said that PDIP could stand as it is today not because of the president or the elite, but because of the support of the people.",
        "img" => 'assets/megawati.jpg' 
    ]);
});
