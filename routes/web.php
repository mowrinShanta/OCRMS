<?php

use App\Http\Controllers\Backend\OfficeController;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\ComplaintController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\NidController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserloginController;
use App\Http\Controllers\Frontend\contactController;

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
//user related work
Route::get('/nidds',[UserloginController::class,'niddList'])->name('user.nidds');  
Route::post('/verified',[UserloginController::class,'verified'])->name('user.do.nidds'); 
Route::get('/', function () {
    return view('user.main');

});
//Apply form show korar jonno
// Route::get('/applys',[UserController::class,'applyList'])->name('user.applys');
//contact table show korar jonno
Route::get('/contacts',[ContactController::class,'contactList'])->name('user.contacts');


Route::get('/registration',[UserController::class,'registrationForm'])->name('user.registration'); 
Route::post('/registration/storage',[UserController::class,'storage'])->name('user.registration.storage');

Route::get('/nidds/create',[UserController::class,'niddCreate'])->name('user.nidds.create');   //form create korar jonno
Route::post('/nidds/store',[UserController::class,'store'])->name('user.nidds.store');   //database data submit korar jonno
Route::get('/confirmation',[UserController::class,'confirmationCreate'])->name('user.confirmation');


Route::get('/table',[UserController::class,'complainerTable'])->name('admin.complainer.table');






//end user panel related work

//admin panel related work

Route::group(['prefix'=>'admin-portal'],function(){

       //login
    Route::get('/login',[LoginController::class,'logIn'])->name('admin.login');
    Route::post('/dologin',[LoginController::class,'dologIn'])->name('admin.do.logIn');
       
    //end login
    
    Route::group(['middleware'=>'auth'],function (){
       Route::get('/', function () {
        return view('admin.master');
    })->name('admin');

    Route::get('/logout',[LoginController::class,'logOut'])->name('admin.logout');
   



    //end login
    Route::get('/offices',[OfficeController::class,'officeList'])->name('admin.offices');
    Route::get('/offices/create',[OfficeController::class,'officeCreate'])->name('admin.offices.create');
    Route::post('/offices/store',[OfficeController::class,'store'])->name('admin.offices.store');
    Route::get('offices/view/{office_id}',[OfficeController::class,'officeDetails'])->name('admin.office.details');
    Route::get('/offices/edit/{id}',[OfficeController::class,'officeEdit'])->name('admin.offices.edit');
    Route::get('offices/delete/{office_id}',[OfficeController::class,'officeDelete'])->name('admin.office.delete');
    Route::put('/offices/update/{id}',[OfficeController::class,'officeUpdate'])->name('admin.office.update');
    
    
    Route::get('/complaints',[ComplaintController::class,'complaintList'])->name('admin.complaints');
    Route::get('/complaints/create',[ComplaintController::class,'complaintCreate'])->name('admin.complaint_type.create');
    Route::post('/complaints/store',[ComplaintController::class,'store'])->name('admin.complaint_type.store');
    Route::get('complaints/view/{complaint_id}',[ComplaintController::class,'complaintDetails'])->name('admin.complaint.details');
    Route::get('/complaints/edit/{id}',[ComplaintController::class,'complaintEdit'])->name('admin.complaint.edit');
    Route::put('/complaints/update/{id}',[ComplaintController::class,'complaintUpdate'])->name('admin.complaint.update');
    Route::get('complaints/delete/{complaint_id}',[ComplaintController::class,'complaintDelete'])->name('admin.complaint.delete');


    Route::get('/complainers',[ComplainerController::class,'complainerList'])->name('admin.complainers');
    Route::get('/complainers/create',[ComplainerController::class,'complainerCreate'])->name('admin.complainer.create');
    Route::post('/complainers/store',[ComplainerController::class,'store'])->name('admin.complainer.store');
    Route::get('complainers/view/{complainer_id}',[ComplainerController::class,'complainertDetails'])->name('admin.complainer.details');
    Route::get('/complainers/edit/{id}',[ComplainerController::class,'complainerEdit'])->name('admin.complainer.edit');
    Route::put('/complainers/update/{id}',[ComplainerController::class,'complainerUpdate'])->name('admin.complainer.update');
    Route::get('complainers/delete/{complainer_id}',[ComplainerController::class,'complainerDelete'])->name('admin.complainer.delete');



//Nid information
    Route::get('/nids',[NidController::class,'nidList'])->name('admin.nids');  //form show koranor jonno
    Route::get('/nids/create',[NidController::class,'nidCreate'])->name('admin.nids.create');   //form create korar jonno
    Route::post('/nids/store',[NidController::class,'store'])->name('admin.nids.store');   //database data submit korar jonno
    Route::get('/nids/edit/{id}',[NidController::class,'nidEdit'])->name('admin.nids.edit');
    Route::put('/nids/update/{id}',[NidController::class,'nidUpdate'])->name('admin.nids.update');
    Route::get('nids/view/{nids_id}',[NidController::class,'nidDetails'])->name('admin.nids.details');
    Route::get('nids/delete/{nids_id}',[NidController::class,'nidDelete'])->name('admin.nids.delete');


    Route::get('/content',[ContentController::class,'contentList'])->name('admin.content');
    
    
    
});


});
//user route

    