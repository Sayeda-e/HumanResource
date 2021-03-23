<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\karmandjadedController;
use App\Http\Controllers\taqarorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('Home');

Route::get('/karmand', function () {
    return view('karmand');
});

Route::get('/kargar', function () {
    return view('kargar');
});

Route::get('/rokhsati', function () {
    return view('rokhsati');
});

Route::get('/employee/listKarmandan', function () {
    return view('employee/listKarmandan');
});

Route::get('/employee/karmandJaded', function () {
    return view('employee/karmandJaded');
});

Route::get('/employee/Taqaror', function () {
    return view('employee/Taqaror');
});

Route::get('/employee/amozishWazifayee', function () {
    return view('employee/amozishWazifayee');
});

Route::get('/employee/aqarib', function () {
    return view('employee/aqarib');
});

Route::get('/employee/arzyabi', function () {
    return view('employee/arzyabi');
});

Route::get('/employee/askary', function () {
    return view('employee/askary');
});

Route::get('/employee/darayee', function () {
    return view('employee/darayee');
});

Route::get('/employee/document', function () {
    return view('employee/document');
});

Route::get('/employee/farzan', function () {
    return view('employee/farzan');
});

Route::get('/employee/midal', function () {
    return view('employee/midal');
});

Route::get('/employee/mosaferat', function () {
    return view('employee/mosaferat');
});

Route::get('/employee/otherWork', function () {
    return view('employee/otherWork');
});

Route::get('/employee/tabdilat', function () {
    return view('employee/tabdilat');
});

Route::get('/employee/Tahsil', function () {
    return view('employee/Tahsil');
});

Route::get('/employee/talifat', function () {
    return view('employee/talifat');
});

Route::get('/employee/tarfehat', function () {
    return view('employee/tarfehat');
});

Route::get('/employee/Zaban', function () {
    return view('employee/Zaban');
});

Route::get('/employee/zaoj', function () {
    return view('employee/zaoj');
});

Route::post('/karmandJaded/karmand', [karmandjadedController::class, 'karmand']);
Route::get('/employee/listKarmandan', [karmandjadedController::class, 'getkarmand']);
Route::get('/employee/search', [karmandjadedController::class, 'search']);
Route::get('/employee/edit/{id}', [karmandjadedController::class, 'edits']);
Route::post('/employee/edit', [karmandjadedController::class, 'update']);
Route::get('employee/delete/{id}', [karmandjadedController::class, 'delete']);
Route::post('/Taqaror/taqaror', [taqarorController::class, 'taqaror']);
Route::get('/employee/Taqaror', [taqarorController::class, 'getId']);
