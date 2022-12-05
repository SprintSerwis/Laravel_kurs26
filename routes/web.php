<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
}
| Tutaj możesz zarejestrować trasy internetowe dla swojej aplikacji.
| Trasy te są ładowane przez RouteServiceProvider w ramach grupy,
| która zawiera grupę oprogramowania pośredniczącego „web”.
|
*/

// Ten routing wywołuje plik widoku /sesource/views/welcome.blade.php
// po wywołaniu strony http://strona.26:8000/
Route::get('/', function () {
    return view('welcome');
});

// Ten routing wywołuje plik widoku /sesource/views/welcome.blade.php
// po wywołaniu strony http://strona.26:8000/zmienne
Route::get('/zmienne', function () {
    return view('zmienne', ['name' => '<b>Sławek</b>']);
});

// Ten routing wywołuje plik kontrolera App\Http\Controllers\PagesController.php
// po wywołaniu strony http://strona.26:8000/pages
// Uwaga: w Laravel 9 podajemy pełną ścieżkę do pliku kontrolera
// z wielkimi literami i odwrotnymi ukośnikami, jak w Windows
Route::resource('pages', 'App\Http\Controllers\PagesController');
