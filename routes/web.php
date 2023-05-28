 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});

Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class,'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class,'store']);
Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class,'edit']);
Route::post('/mahasiswa/{id}/update',[MahasiswaController::class,'update']);
Route::get('/mahasiswa/{id}/delete',[MahasiswaController::class,'destroy']);

// 1 to 1
Route::get('/mahasiswa/wali', [MahasiswaController::class,'wali']);

// one to many
Route::get('/mahasiswa/dosen', [MahasiswaController::class,'dosen']);

//Many to Many
Route::get('/mahasiswa/matkul', [MahasiswaController::class,'matkul']);
