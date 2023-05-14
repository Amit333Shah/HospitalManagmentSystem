<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorProfileController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DepatmentController;
use App\Http\Controllers\Auth\RegisteredUserController;



// use App\Http\Controllers\ProfileController;


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
    return view('auth.gurukulLogin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Login Pages
Route::get('GrukulLogin',[RegisteredUserController::class,'grukulLogin'])->name('grukulLogin');
Route::get('FoaLogin',[RegisteredUserController::class,'FoaLogin'])->name('FoaLogin');

// Route::view('FoaLogin','auth.FoaLogin');
Route::view('RishikulLogin','auth.RishikulLogin');
Route::view('pp','receptionistPanel.print2');


// end login pages
Route::middleware('auth')->group(function () {
// Excel upload
Route::get('/file-import',[PatientController::class,'importView'])->name('import-view');
Route::post('/import',[PatientController::class,'import'])->name('import');
Route::get('/export-users',[PatientController::class,'exportUsers'])->name('export-users');

// Patient Table 



// AdminPanel
Route::get('/adminPanel', [DoctorProfileController::class, 'adminPanleview'])->name('adminPanel');
Route::get('/doctorform/{id}', [DoctorProfileController::class, 'doctorForm'])->name('doctorForm');
Route::post('/addDoctor', [DoctorProfileController::class, 'adddoctorProfile'])->name('addProfileDoctor');
Route::get('/doctortable', [DoctorProfileController::class, 'show_all_doctor'])->name('show_all_doctor');
Route::get('doctorusers', [DoctorProfileController::class, 'doctor_user_table'])->name('doctor_user_table');
Route::get('department',[DepatmentController::class,'showDepartment'])->name('show_Department');
Route::post('createdepartment',[DepatmentController::class,'createDepartment'])->name('create_Department');
Route::get('editdepartment/{id}',[DepatmentController::class,'editDepartment'])->name('edit_Department');

// enddoctor

// Receptionist Panel
Route::post('addPatient',[PatientController::class,'addPatient'])->name('AddPatient');
Route::get('patientForm',[PatientController::class,'patientForm'])->name('patientForm');
Route::get('today',[PatientController::class,'today_patient_table'])->name('today_patient_table');
Route::get('allPatients',[PatientController::class,'all_patient_table'])->name('all_patient_table');
Route::get('print/{id}',[PatientController::class,'print'])->name('print');
});
// endPatient

//Excel Upload
