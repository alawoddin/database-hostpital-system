<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EEGController;
use App\Http\Controllers\googlecontroller;
use App\Http\Controllers\OPDController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
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