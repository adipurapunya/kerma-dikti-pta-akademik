<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group( function(){
    Route::get('register','register')->name('register');
    
    Route::post('register','registerSimpan')->name('register.simpan');
    Route::get('login','login')->name('login');
    Route::post('login','loginAksi')->name('login.aksi');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
    Route::get('indexUser','indexUser')->name('user');
    Route::get('addUser','addUser')->name('addUser');
    Route::post('addUser','simpan')->name('addUser.simpan');
    Route::get('editUser/{id}','editUser')->name('editUser');
    Route::post('editUser/{id}','updateUser')->name('addUser.updateUser');
    Route::get('hapusUser/{id}','hapusUser')->name('hapusUser');
    
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    
    Route::controller(BarangController::class)->prefix('barang')->group(function(){
        Route::get('','index')->name('barang');
        Route::get('tambah','tambah')->name('barang.tambah');
        Route::post('tambah','simpan')->name('barang.tambah.simpan');
        Route::get('edit/{id}','edit')->name('barang.edit');
        Route::post('edit/{id}','update')->name('barang.tambah.update');
        Route::get('hapus/{id}','hapus')->name('barang.hapus');
    });

    Route::controller(kategoriController::class)->prefix('kategori')->group(function(){
        Route::get('','index')->name('kategori');
        Route::get('tambah','tambah')->name('kategori.tambah');
        Route::post('tambah','simpan')->name('kategori.tambah.simpan');
        Route::get('edit/{id}','edit')->name('kategori.edit');
        Route::post('edit/{id}','update')->name('kategori.tambah.update');
        Route::get('hapus/{id}','hapus')->name('kategori.hapus');
    });

    Route::controller(ProposalController::class)->prefix('proposal')->group(function(){
        Route::get('','index')->name('proposal');
        Route::post('tambah','simpan')->name('proposal.tambah.simpan');
        Route::get('viewBab1','viewBab1')->name('proposal.viewBab1');
        Route::get('editBab1/{id}','editBab1')->name('proposal.editBab1');
        Route::post('editBab1','updateBab1')->name('proposal.editBab1.tambah.update');
        Route::get('editBab2/{id}','editBab2')->name('proposal.editBab2');
        Route::post('editBab2','updateBab2')->name('proposal.editBab2.tambah.update');
        Route::get('editBab3/{id}','editBab3')->name('proposal.editBab3');
        Route::post('editBab3','updateBab3')->name('proposal.editBab3.tambah.update');
        Route::get('editBab4/{id}','editBab4')->name('proposal.editBab4');
        Route::post('editBab4','updateBab4')->name('proposal.editBab4.tambah.update');

        Route::get('hapus/{id}','hapusProposal')->name('proposal.hapus');
    });
});


