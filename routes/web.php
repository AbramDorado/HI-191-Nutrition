<?php

use App\Http\Controllers\DietHistoryController;
use App\Http\Controllers\LabRequestController;
use App\Http\Controllers\SoapController;
use App\Http\Controllers\Pcwm1Controller;
use App\Http\Controllers\Pcwm2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FingerDevicesControlller;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\ExcelController;

Route::get('/', function () {
    return view('auth/login');
})->name('welcome');
Route::get('attended/{user_id}', '\App\Http\Controllers\AttendanceController@attended' )->name('attended');
Route::get('attended-before/{user_id}', '\App\Http\Controllers\AttendanceController@attendedBefore' )->name('attendedBefore');
Auth::routes(['register' => false, 'reset' => false]);

Route::group(['middleware' => ['auth', 'Role'], 'roles' => ['admin']], function () {

    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');
});

// Route::get('/codeblueforms', function(){
//     return view('includes/codeblueforms');
// });

// Route::get('/maininformation', function () {
//     return view('maininformation');
// });

// Route::get('/initialresuscitation', function(){
//     return view('initialresuscitation');
// });

// Route::get('/flowsheet', function(){
//     return view('flowsheet');
// });

// Route::get('/outcome', function(){
//     return view('outcome');
// });

// Route::get('/evaluation', function(){
//     return view('evaluation');
// });

// Route::get('/codeteam', function(){
//     return view('codeteam');
// });

Route::get('/users', function(){
    return view('users');
});


Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::post('/store_user', [UserController::class, 'store'])->name('store_user');

Route::put('/update_user/{id}', [UserController::class, 'updateUser'])->name('update_user');

Route::get('/codeteam/{code_number}', [CodeTeamController::class, 'index'])->name('codeteam')->middleware('web');
Route::post('/codeteam/{code_number}', [CodeTeamController::class, 'store'])->name('store_codeteam');

Route::get('/initialresuscitation/{code_number}', [InitialResuscitationController::class, 'index'])->name('initialresuscitation');
Route::post('/initialresuscitation/{code_number}', [InitialResuscitationController::class, 'store'])->name('store_initialresuscitation');

Route::get('/flowsheet/{code_number}', [FlowsheetController::class, 'index'])->name('flowsheet');

Route::get('/evaluation/{code_number}', [EvaluationController::class, 'index'])->name('evaluation');
Route::post('/evaluation/{code_number}', [EvaluationController::class, 'store'])->name('store_evaluation');

Route::get('/outcome/{code_number}', [OutcomeController::class, 'index'])->name('outcome');
Route::post('/outcome/{code_number}', [OutcomeController::class, 'store'])->name('store_outcome');

Route::get('/maininformation/{code_number}', [MainInformationController::class, 'index'])->name('maininformation');
Route::post('/maininformation/{code_number}', [MainInformationController::class, 'store'])->name('store_maininformation');

Route::get('/searchPatientPins', [PatientController::class, 'searchPatientPins'])->name('searchPatientPins');
Route::get('/fetchPatientInformation', [PatientController::class, 'fetchPatientInformation'])->name('fetchPatientInformation');
Route::get('/fetchPatientPin', [PatientController::class, 'fetchPatientPin'])->name('fetchPatientPin');
Route::get('/fetchFlowsheetInformation/{code_number}', [FlowsheetController::class, 'fetchFlowsheetInformation'])->name('fetchFlowsheetInformation');

Route::delete('/destroy/{id}', [FlowsheetController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [FlowsheetController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [FlowsheetController::class, 'update'])->name('update');
Route::post('/store/{code_number}', [FlowsheetController::class, 'store'])->name('store_flowsheet'); 
// Route::post('/store', [FlowsheetController::class, 'store'])->name('store_flowsheet');
Route::get('/codeblueforms', '\App\Http\Controllers\FormController@index')->name('includes/codeblueforms');

Route::delete('/delete-user/{id}', '\App\Http\Controllers\UserController@deleteUser')->name('delete_user');


Route::get('/codeblueforms/{patient_number}/view', [FormController::class, 'viewCodeBlue'])->name('view_codeblueforms');
// Route::get('/codeblueforms/{code_number}/edit', [FormController::class, 'edit'])->name('edit_codeblueforms');
Route::post('/codeblueforms/{patient_number}/archive', [FormController::class, 'archive'])->name('archive_codeblueforms');


//for achrive
Route::get('/archived_codeblueforms', 'App\Http\Controllers\ArchiveController@archivedCodeBlueForms')->name('archived_codeblueforms');
Route::patch('/unarchive_codeblueforms/{code_number}', [FormController::class,'unarchive'])->name('unarchive_codeblueforms');


Route::get('/download-pdf/{codeEvent}', [PdfController::class, 'download'])->name('download-pdf');
Route::get('/download-excel', [ExcelController::class, 'export'])->name('download-excel');

Route::post('/codeblueforms/{code_number}/finalize', [FormController::class, 'finalize'])->name('finalize_codeblueforms');


Route::group(['middleware' => ['auth']], function () {


});
