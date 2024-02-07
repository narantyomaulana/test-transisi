<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/',[CompanyController::class,'index']);
Route::resource('company', CompanyController::class);
Route::resource('employee', EmployeeController::class);

// Route::get('company/export/pdf', [CompanyController::class, 'exportPdf'])->name('company.export.pdf');
Route::get('company/{companyId}/export/pdf', [CompanyController::class, 'exportPdf'])->name('company.export.pdf');
Route::get('employee/{employeeId}/export/pdf', [EmployeeController::class, 'exportPdf'])->name('employee.export.pdf');



require __DIR__.'/auth.php';
