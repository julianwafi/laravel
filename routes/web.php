<?php

    use App\Http\Controllers\Admin;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Login;
    use App\Http\Controllers\Siswa;
    use App\Http\Controllers\Spp;
    use GuzzleHttp\Middleware;

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



    Route::get('/login', [Login::class, 'index'])->name('login');
    Route::post('/login/proses', [Login::class, 'proses']);
    Route::get('/logout', [Login::class, 'logout']);
    Route::get('/pembayaran',[Spp::class, 'index']);
    Route::post('/pembayaran/save',[Spp::class, 'save']);
    Route::delete('pembayaran/delete/{id}',[Spp::class, 'delete'])->name('pembayaran.delete');
    Route::get('pembayaran/edit/{id}', [Spp::class, 'edit'])->name('pembayaran.edit');
    Route::put('pembayaran/update/{id}', [Spp::class, 'update'])->name('pembayaran.update');

    Route::group(['middleware' => ['auth']], function() {
        Route::group(['middleware' => ['cekUserLogin:admin']], function() {
            Route::resource('admin', Admin::class);
        });
        Route::group(['middleware' => ['cekUserLogin:siswa']], function() {
            Route::resource('siswa', Siswa::class);
        });
    });