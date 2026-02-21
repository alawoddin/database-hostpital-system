<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EEGController;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\ICUController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\OPDController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WardController;
use App\Models\ICU;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

//google login
Route::get('/google/redirect' , [googlecontroller::class , 'index'])->name('google.redirect');
Route::get('/google/callback' , [googlecontroller::class , 'verify']);

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
    Route::post('/admin/password/update', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');
 
});

Route::controller(OPDController::class)->group(function () {
    Route::get('/opd/all', 'AllOPD')->name('all.opd');
    Route::get('/opd/add', 'AddOPD')->name('add.opd');
    Route::post('/opd/store', 'StoreOPD')->name('store.opd');
    Route::get('/opd/edit/{id}', 'EditOPD')->name('edit.opd');
    Route::post('/opd/update', 'UpdateOPD')->name('update.opd');
    Route::get('/opd/delete/{id}', 'DeleteOPD')->name('delete.opd');
});

Route::controller(EEGController::class)->group(function () {
    Route::get('/eeg/all', 'AllEEG')->name('all.eeg');
    Route::get('/eeg/add', 'AddEEG')->name('add.eeg');
    Route::post('/eeg/store', 'StoreEEG')->name('store.eeg');
    Route::get('/eeg/edit/{id}', 'EditEEG')->name('edit.eeg');
    Route::post('/eeg/update', 'UpdateEEG')->name('update.eeg');
    Route::get('/eeg/delete/{id}', 'DeleteEEG')->name('delete.eeg');
});

Route::controller(ICUController::class)->group(function () {
    Route::get('/icu/all', 'AllICU')->name('all.icu');
    Route::get('/icu/add', 'AddICU')->name('add.icu');
    Route::post('/icu/store', 'StoreICU')->name('store.icu');
    Route::get('/icu/edit/{id}', 'EditICU')->name('edit.icu');
    Route::post('/icu/update', 'UpdateICU')->name('update.icu');
    Route::get('/icu/delete/{id}', 'DeleteICU')->name('delete.icu');
});

Route::controller(LabController::class)->group(function () {
    Route::get('/lab/all', 'AllLab')->name('all.lab');
    Route::get('/lab/add', 'AddLab')->name('add.lab');
    Route::post('/lab/store', 'StoreLab')->name('store.lab');
    Route::get('/lab/edit/{id}', 'EditLab')->name('edit.lab');
    Route::post('/lab/update', 'UpdateLab')->name('update.lab');
    Route::get('/lab/delete/{id}', 'DeleteLab')->name('delete.lab');
});

//
Route::controller(WardController::class)->group(function () {
    Route::get('/ward/all', 'AllWard')->name('all.ward');
    Route::get('/ward/add', 'AddWard')->name('add.ward');
    Route::post('/ward/store', 'StoreWard')->name('store.ward');
    Route::get('/ward/edit/{id}', 'EditWard')->name('edit.ward');
    Route::post('/ward/update', 'UpdateWard')->name('update.ward');
    Route::get('/ward/delete/{id}', 'DeleteWard')->name('delete.ward');
});   

Route::controller(ProcedureController::class)->group(function () {
    Route::get('/procedure/all', 'AllProcedure')->name('all.procedure');
    Route::get('/procedure/add', 'AddProcedure')->name('add.procedure');
    Route::post('/procedure/store', 'StoreProcedure')->name('store.procedure');
    Route::get('/procedure/edit/{id}', 'EditProcedure')->name('edit.procedure');
    Route::post('/procedure/update', 'UpdateProcedure')->name('update.procedure');
    Route::get('/procedure/delete/{id}', 'DeleteProcedure')->name('delete.procedure');
});