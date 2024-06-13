<?php

use App\Http\Controllers\DepressionController;
use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\AuthController;


Route::view("/home", 'home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::controller(DepressionController::class)->group(function () {
    Route::get('/manageDepression', 'index')->name("manageDepression");
    Route::get('/addDepression', 'create')->name("depression.create");
    Route::post('/storeDepression', 'store')->name("depression.store");
    Route::get('/editDepression/{id}', 'edit')->name("depression.edit");
    Route::put('/updateDepression/{id}', 'update')->name("depression.update");
    Route::delete('/destroyDepression/{id}', 'destroy')->name("depression.destroy");
});