<?php
//**********  BackEnd Route     ********* */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\BackEnd\BannerController;
use App\Http\Controllers\BackEnd\CmsController;
use App\Http\Controllers\BackEnd\AboutController;
use App\Http\Controllers\BackEnd\AboutSliderController;
use App\Http\Controllers\BackEnd\CoursesController;
use App\Http\Controllers\BackEnd\TranerController;
use App\Http\Controllers\BackEnd\EventsController;


    //************ Front Route ************ \\
use App\Http\Controllers\FrintEnd\HomeController;
use App\Http\Controllers\FrintEnd\AboutControllers;
use App\Http\Controllers\FrintEnd\CoursesControllers;
use App\Http\Controllers\FrintEnd\TranerContorller;
use App\Http\Controllers\FrintEnd\EventsControllers;
use App\Http\Controllers\FrintEnd\ContactController;



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++// BackEnd Route  \\+++++++++++++++++++++++++++++++++++++++++++++++
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



///*****  User  ****** */
Route::get('/userlist',[UserController::class,'userlist']);
Route::get('/userform',[UserController::class,'userform']);
Route::post('/userform',[UserController::class,'formvalidation']);
Route::get('/userid/{id}',[UserController::class,'editdata']);
Route::put('/userid/{id}/update',[UserController::class,'update']);
Route::get('/delete/{id}',[UserController::class,'deletess']);




///******  Banner  ****** */
Route::get('/Listlink',[BannerController::class,'BannerList']);
Route::get('/BannerForm',[BannerController::class,'BannerForm']);
Route::post('/BannerForm',[BannerController::class,'AddData']);
Route::get('update/{id}',[BannerController::class,'editData']);
Route::put('update/{id}',[BannerController::class,'updateData']);
Route::get('/deleted/{id}',[BannerController::class,'deletedd']);





///*******  Cms  *******/
Route::get('/cmsLitLink',[CmsController::class,'cmsList']);
Route::get('/cmsFormLink',[CmsController::class,'cmsform']);
Route::post('/cmsFormLink',[CmsController::class,'cmsValidation']);
Route::get('/updated/{id}/data',[CmsController::class,'updateFun']);
Route::put('/updated/{id}/data',[CmsController::class,'editdata']);
Route::get('/deleted/{id}/data',[CmsController::class,'deleted']);
Route::get('/Status/{id}/data',[CmsController::class,'Status']);





///*************  About   ************ */
Route::get('/About/Form',[AboutController::class,'About_Form'])->name('About/Form');
Route::get('/About/List',[AboutController::class,'About_List'])->name('About/List');
Route::post('/About/Form',[AboutController::class,'About_Function']);
Route::get('/updated/About/{id}',[AboutController::class,'About_Edit']);
Route::put('/updated/About/{id}',[AboutController::class,'About_Update']);
Route::get('/deleted/About/{id}',[AboutController::class,'About_Delete']);
Route::get('/Force/List',[AboutController::class,'Force_List'])->name('Force/list');
Route::get('/Force/Delete/{id}',[AboutController::class,'Force_Delete']);
Route::get('/Restore/About/{id}',[AboutController::class,'Restore_Force_Data']);





//*********  About Slider  ************ */
Route::get('/Abhout/Slider/List',[AboutSliderController::class,'Slider_List_Show'])->name('Abhout/Slider/List');
Route::get('/Abhout/Slider/Form',[AboutSliderController::class,'Slider_Form_Show'])->name('Abhout/Slider/Form');
Route::post('/Abhout/Slider/Form',[AboutSliderController::class,'Slider_Submit_Validation']);
Route::get('/Abhout/Slider/Edit/{id}',[AboutSliderController::class,'Slider_Form_Edit']);
Route::post('/Abhout/Slider/Edit/{id}',[AboutSliderController::class,'Slider_Update']);
Route::get('/Abhout/Slider/ForceDelete/{id}',[AboutSliderController::class,'Force_Delete_Slider']);
Route::get('/Abhout/Slider/Delete/{id}',[AboutSliderController::class,'Delete_Slider']);
Route::get('/Abhout/Slider/Restore/{id}',[AboutSliderController::class,'Force_Restore_Slider']);
Route::get('/Abhout/Trash/list',[AboutSliderController::class,'Trash_List_Show'])->name('Trash/list');





//********  Courses  *********//
Route::get('/Courses/List',[CoursesController::class,'Courses_List'])->name('Courses.List');
Route::get('/Courses/Form',[CoursesController::class,'Courses_Form'])->name('Courses.Form');
Route::post('/Courses/Form',[CoursesController::class,'Courses_Submit_function']);
Route::get('/Courses/Edit/{id}',[CoursesController::class,'Edit_Function']);
Route::put('/Courses/Edit/{id}',[CoursesController::class,'Update_Function']);
Route::get('/Courses/Delete/{id}',[CoursesController::class,'Delete_Function']);





//********** Trainer  ***********//
Route::get('Trainerss',[TranerController::class,'Trainer_List'])->name('Trainer/List');
Route::get('TrainerForm',[TranerController::class,'Trainer_Form'])->name('Trainer/Form');
Route::post('TrainerForm',[TranerController::class,'Trainer_validation_submit']);
Route::get('Trainer/Edit/{id}',[TranerController::class,'Trainer_Edit_Function']);
Route::put('Trainer/Edit/{id}',[TranerController::class,'Update_Form_Data']);
Route::get('Trainer/Delete/{id}',[TranerController::class,'Trainer_Delete_Function']);




//*********  Events  ************** */
Route::get('Events/List',[EventsController::class,'Events_List'])->name('Event/List');
Route::get('Events/Form',[EventsController::class,'Events_Form'])->name('Event/Form');
Route::post('Events/Form',[EventsController::class,'Events_Validation_Function']);
Route::get('/Events/Edit/{id}',[EventsController::class,'Events_Edit_Function']);
Route::put('/Events/Edit/{id}',[EventsController::class,'Events_Update_Function']);
Route::get('/Events/Delete/{id}',[EventsController::class,'Events_delete']);
Route::get('/Events/Trash',[EventsController::class,'Events_Trash'])->name('Events/Trash');
Route::get('/Events/restore/{id}',[EventsController::class,'Events_Restore']);
Route::get('/Events/forceDelete/{id}',[EventsController::class,'forceDelete']);





//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++//      Front End side    //+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++                                                 



// //***************  Home Routes  *************** //
Route::get('/Home',[HomeController::class,'Home']);
Route::get('/Home',[HomeController::class,'Cms_Function']);
    



//***************   About  ****************/
Route::get('/About',[AboutControllers::class,'About_Front_Function']);
Route::get('/About',[AboutControllers::class,'About_Front_Function']);




//*************** Courses  ***************//
Route::get('/Courses',[CoursesControllers::class,'Courses_Function_Front']);





//***************  Traners    ***************/
Route::get('Trainers',[TranerContorller::class,'TranerFunction']);





//****************  Events  ***************//
Route::get('Events',[EventsControllers::class,'Events_Function']);





//*************  Contact  ***************//
Route::get('/Contact',[ContactController::class,'ContactPage']);
Route::post('/Contact',[ContactController::class,'Contact_validation']);





Route::get('/Pricing', function () {
    return view('fronts/Pricing');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
