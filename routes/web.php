<?php

use App\Http\Controllers\Backend\OfficeController;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\ComplaintController;
use App\Http\Controllers\Backend\ComplainerController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserloginController;
use App\Http\Controllers\Frontend\contactController;
use App\Http\Controllers\Frontend\FeedbacktableController;

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
//root
Route::get('/', function () {
    return view('root');

})->name('root');



Route::group(['prefix'=>'user'],function(){

//user related work user login
Route::get('/nidds',[UserloginController::class,'niddList'])->name('user.nidds');  
Route::post('/verified',[UserloginController::class,'verified'])->name('user.do.nidds'); 
Route::get('/', function () {
    return view('user.main');

})->name('user');
//Apply form show korar jonno
// Route::get('/applys',[UserController::class,'applyList'])->name('user.applys');
//contact table show korar jonno
Route::get('/contacts',[ContactController::class,'contactList'])->name('user.contacts');
//feedback
Route::get('/feedbacks',[FeedbacktableController::class,'feedbackTable'])->name('user.feedbacks');
//notice
Route::get('/notice',[FeedbacktableController::class,'Notice'])->name('user.notice');


Route::get('/nidds/status/solved/{id}',[UserController::class,'case_status'])->name('user.status.solved');   //database data submit korar jonno


//services
Route::get('/healthcare',[FeedbacktableController::class,'healthCare'])->name('user.healthcare');
Route::get('/law',[FeedbacktableController::class,'Law'])->name('user.law');
Route::get('/travel',[FeedbacktableController::class,'Travel'])->name('user.travel');
Route::get('/recruitment',[FeedbacktableController::class,'Recruitment'])->name('user.recruitment');
Route::get('/education',[FeedbacktableController::class,'Education'])->name('user.education');

Route::get('/registration',[UserController::class,'registrationForm'])->name('user.registration'); 
Route::post('/registration/storage',[UserController::class,'storage'])->name('user.registration.storage');

Route::group(['middleware'=>['auth' ,'Userlogin']],function (){
    
    Route::get('/logout',[UserloginController::class,'logOut'])->name('user.logout');

Route::get('/nidds/create',[UserController::class,'niddCreate'])->name('user.nidds.create');   //form create korar jonno
Route::post('/nidds/store',[UserController::class,'store'])->name('user.nidds.store');   //database data submit korar jonno

Route::get('/confirmation',[UserController::class,'confirmationCreate'])->name('user.confirmation');


Route::get('/table',[UserController::class,'complainerTable'])->name('admin.complainer.table');



});
});





//end user panel related work

//admin panel related work

Route::group(['prefix'=>'admin-portal'],function(){

       //login
    Route::get('/login',[LoginController::class,'logIn'])->name('admin.login');
    Route::post('/dologin',[LoginController::class,'dologIn'])->name('admin.do.logIn');
       
    //end login
    
    Route::group(['middleware'=>['auth' ,'Adminlogin']],function (){

       Route::get('/', function () {
        return view('admin.master');
    })->name('admin');

    Route::get('/logout',[LoginController::class,'logOut'])->name('admin.logout');
   



    //end login
    Route::get('/profiles',[LoginController::class,'profileList'])->name('admin.profiles');





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
    Route::get('complainers/delete/{complainer_id}',[ComplainerController::class,'complainerDelete'])->name('admin.complainer.delete');



//Nid information
    Route::get('/feedbacks',[FeedbackController::class,'feedbackList'])->name('admin.feedbacks');  //form show koranor jonno
    Route::get('/feedbacks/create',[FeedbackController::class,'feedbackCreate'])->name('admin.feedbacks.create');   //form create korar jonno
    Route::post('/feedbacks/store',[FeedbackController::class,'store'])->name('admin.feedbacks.store');   //database data submit korar jonno
    Route::get('/feedbacks/edit/{id}',[FeedbackController::class,'feedbackEdit'])->name('admin.feedbacks.edit');
    Route::put('/feedbacks/update/{id}',[FeedbackController::class,'feedbackUpdate'])->name('admin.feedbacks.update');
    Route::get('feedbacks/view/{feedbacks_id}',[FeedbackController::class,'feedbackDetails'])->name('admin.feedbacks.details');
    Route::get('feedbacks/delete/{feedbacks_id}',[FeedbackController::class,'feedbackDelete'])->name('admin.feedbacks.delete');


    Route::get('/content',[ContentController::class,'contentList'])->name('admin.content');
    
    
    Route::get('/notices',[NoticeController::class,'noticesList'])->name('admin.notices');
    Route::get('/notices/create',[NoticeController::class,'noticesCreate'])->name('admin.notices.create');
    Route::post('/notices/store',[NoticeController::class,'store'])->name('admin.notices.store');
    Route::get('notices/view/{notices_id}',[NoticeController::class,'noticesDetails'])->name('admin.notices.details');
    Route::get('/notices/edit/{id}',[NoticeController::class,'noticesEdit'])->name('admin.notices.edit');
    Route::put('/notices/update/{id}',[NoticeController::class,'noticesUpdate'])->name('admin.notices.update');
    Route::get('/notices/delete/{notices_id}',[NoticeController::class,'noticesDelete'])->name('admin.notices.delete');
});


});
    