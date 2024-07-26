<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\InventoryController;


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

 
Route::controller(CalculatorController::class)->group(function () {
    Route::get('/calculator', 'index')->name('simple.calcolator');
    Route::post('/calculator', 'calculate')->name('simple.calcolate');
});

Route::get('/inventory', [InventoryController::class, 'inventory_index'])->name('inventory.calculate');
Route::get('/inventory/add/income', [InventoryController::class, 'addincome_index'])->name('inventory.income');
Route::post('/inventory/store/income', [InventoryController::class, 'addincome_store'])->name('inventory.store');
Route::get('/inventory/add/expense', [InventoryController::class, 'addexpense_index'])->name('inventory.expense');
Route::post('/inventory/store/expense', [InventoryController::class, 'addexpense_store'])->name('expense.store');
Route::get('/inventory/overview', [InventoryController::class, 'overview_index'])->name('inventory.overview');
Route::get('/inventory/view/details', [InventoryController::class, 'viewDetails'])->name('view.details');
Route::get('/expense/delete/{id}', [InventoryController::class, 'delete_expense'])->name('expense.delete');
Route::get('/income/delete/{id}', [InventoryController::class, 'delete_income'])->name('income.delete');
Route::get('/income/edit/{id}', [InventoryController::class, 'edit_income'])->name('income.edit');
Route::get('/expense/edit/{id}', [InventoryController::class, 'edit_income'])->name('expense.edit');

