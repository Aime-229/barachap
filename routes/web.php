<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AlertesController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PlacementController;
use App\Http\Controllers\ProfileController;
use App\Models\Activite;
use App\Models\Alertes;
use App\Models\Employee;
use App\Models\Placement;
use Illuminate\Support\Facades\Route;

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

Route::resource('employee', EmployeController::class);
Route::resource('activites', ActiviteController::class);
Route::resource('placement', PlacementController::class);
Route::resource('alertes', AlertesController::class);

Route::get('/register-to-bara',[EmployeController::class,'create'])->name('barachap');
Route::post('/register-to-bara',[EmployeController::class,'register'])->name('barachap');
Route::get('/register-message',[EmployeController::class,'message'])->name('message');
Route::get('/alertes-message',[AlertesController::class,'message'])->name('message');


/* Route::get('/activites', function() {
    return view('activite.index');
})->name('activites');

Route::post('/activites', [ActiviteController::class,'store'])->name('activites.store'); */

Route::get('/dashboard', function () {
    $activites = Activite::all();
    $employees = Employee::all();
    $alertes = Alertes::all();
    $placements = Placement::all();
    return view('dashboard', compact('activites','employees','alertes','placements'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
