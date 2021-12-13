<?php

use App\Http\Controllers\Backend\OfficeController;
use App\Http\Controllers\Backend\ComplaintController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\NidController;
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

Route::get('/', function () {
    return view('user.main');
});


Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    Route::get('/offices',[OfficeController::class,'officeList'])->name('admin.offices');
    Route::get('/offices/create',[OfficeController::class,'officeCreate'])->name('admin.offices.create');
    Route::post('/offices/store',[OfficeController::class,'store'])->name('admin.offices.store');
    
    Route::get('/complaints',[ComplaintController::class,'complaintList'])->name('admin.complaints');
    Route::get('/complaints/create',[ComplaintController::class,'complaintCreate'])->name('admin.complaint_type.create');
    Route::post('/complaints/store',[ComplaintController::class,'store'])->name('admin.complaint_type.store');

    Route::get('/complainers',[ComplainerController::class,'complainerList'])->name('admin.complainers');
    Route::get('/complainers/create',[ComplainerController::class,'complainerCreate'])->name('admin.complainer.create');
    Route::post('/complainers/store',[ComplainerController::class,'store'])->name('admin.complainer.store');

//Nid information
    Route::get('/nids',[NidController::class,'nidList'])->name('admin.nids');  //form show koranor jonno
    Route::get('/nids/create',[NidController::class,'nidCreate'])->name('admin.nids.create');   //form create korar jonno
    Route::post('/nids/store',[NidController::class,'store'])->name('admin.nids.store');   //database data submit korar jonno
});


//user route