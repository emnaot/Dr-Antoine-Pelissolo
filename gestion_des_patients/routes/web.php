<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\ordonnancecontroller;
use App\Http\Controllers\consultationcontroller;
use App\Http\Controllers\rendez_vouscontroller;
use App\Http\Controllers\PDFController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/calendrier', function () {
    return view('calendrier');
});
Route::get('/profil', function () {
    return view('Profil');
});

Route::get('/Tableau_de_bord', function () {
    return view('Tableau_de_bord');
});

Route::get('/login', function () {
    return view('page-login');
});
Route::get('/register', function () {
    return view('page-register');
});


Route::get('/succ', function () {
    return view('succès');
});




Route::get('/Administrateurs', [admin::class, 'showAdmin']);



Route::get('/Consultations', [consultationcontroller::class, 'showConsultation'])->name('consultations.index');


Route::get('/Patients', [patientcontroller::class, 'showPatient'])->name('patients.index');


Route::get('/datatable-Ordonnances', [ordonnancecontroller::class, 'showOrdonnance'])->name('ordonnances.index');
//Rendez-vous
Route::get('/Rendez-vous', [rendez_vouscontroller::class, 'showRendez_vous'])->name('rendezvous.index');
Route::POST('/addRDV', [rendez_vouscontroller::class, 'Add']);





//form(ADD)
//Route::post('/add-user', [UserController::class, 'addUser'])->name('add_user');
Route::post('/addpatient', [PatientController::class, 'AddPatient']);
Route::post('/addconsultation', [ConsultationController::class, 'AddConsultation']);
Route::post('/addrendez_vous', [rendez_vouscontroller::class, 'AddRendez']);








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




  //modal (modifier patient)
  Route::post('/editpatient/{id}', [patientcontroller::class, 'updatepatient']);
   //modal (modifier consultation)
   Route::post('/editconsultation/{id}', [consultationcontroller::class, 'updateconsultation']);
//modal (modifier rendez_vous)
Route::post('/editrendezvous/{id}', [rendez_vouscontroller::class, 'updaterendez']);
//modal (modifier ordonnance)
Route::post('/editordonnance/{id}', [ordonnancecontroller::class, 'updateordonnance']);



// ordonnance
Route::post('/enregistrer-ordonnance', [ordonnancecontroller::class, 'enregistrerOrdonnance']);
//de consultation à ordonnance

Route::get('/consordo', [ordonnancecontroller::class, 'join']);




Route::get('/ordonnance/{id}', [consultationcontroller::class, 'showordonnance']);
Route::get('/ordonnance', [ordonnancecontroller::class, 'join']);





//pdf
Route::get('/generate-pdf/{id}', [PDFController::class, 'generatePDF']);










