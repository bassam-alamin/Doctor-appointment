<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AppointmentController;



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
Route::get('/', [HomeController::class, 'welcome']);

Route::get('/create_patient_view', [HomeController::class, 'create_patient_view']);

Route::post('/create_patient', [HomeController::class, 'create_patient']);

Route::middleware("auth")->group(function(){
    Route::get('/patients', [HomeController::class, 'view']);
});

Route::delete('/delete/{id}', [HomeController::class, 'delete']);

Route::get('/search', [HomeController::class, 'search']);

Route::get('/update_view/{id}', [HomeController::class, 'update_view']);

Route::put('/update/{id}', [HomeController::class, 'update_patient']);

# Rest Api's
Route::get('/api/view/{patient_name}', [HomeController::class, 'view_patient']);
Route::get('/api/view/doctor/{patient_name}', [DoctorsController::class, 'view_doctor']);
Route::get('/api/bookings/all', [AppointmentController::class, 'all_appointments']);



# Doctors route

Route::get('/doctors', [DoctorsController::class, 'view_doctors']);

Route::get('/update/doctor/{id}', [DoctorsController::class, 'update_doctor_view']);

Route::put('/update/doctor/{id}', [DoctorsController::class, 'update_doctor']);

Route::get('/create_doctor_view', [DoctorsController::class, 'create_doctor_view']);

Route::post('/create_doctor', [DoctorsController::class, 'create_doctor']);

Route::delete('/delete/doctor/{id}', [DoctorsController::class, 'delete_doctor']);



# Appointments route
Route::get('/appointments', [AppointmentController::class, 'view_appointments']);

Route::put('/update/appointment/{id}', [AppointmentController::class, 'update_appointment']);

Route::post('/create/appointment', [AppointmentController::class, 'create_appointment']);

Route::delete('/delete/appointment/{id}', [AppointmentController::class, 'delete_appointment']);

Route::get('/update/appointment/{id}', [AppointmentController::class, 'update_appointment_view']);

Route::get('/create_appointment_view', [AppointmentController::class, 'create_appointment_view']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
