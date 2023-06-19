<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountsController;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    /**
     * Dashboard
     */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /**
     * Banking Accounts
     *
     *  */
    // Index
    Route::get('/accounts', [AccountsController::class, 'index'])->name('accounts.index');

    // Create
    Route::post('/accounts/create', [AccountsController::class, 'create'])->name('accounts.create');

    // Show
    Route::get('/accounts/{id}', [AccountsController::class, 'show'])->name('accounts.show');

    // Edit
    Route::get('/accounts/{id}/edit', [AccountsController::class, 'edit'])->name('accounts.edit');
    // Update
    Route::put('/accounts/{id}', [AccountsController::class, 'update'])->name('accounts.update');

    // Delete
    Route::delete('/accounts/{account}', [AccountsController::class, 'destroy'])->name('accounts.destroy');

    /**
     * Transactions
     *
     */

    // Index
    Route::get('/accounts/{id}/transactions', [TransactionsController::class, 'index'])->name('transactions.index');

    // Create
    Route::post('/accounts/{id}/transactions/create', [TransactionsController::class, 'create'])->name('transactions.create');

    /**
     * Category
     *
     */

    // Index
    Route::get('/category', [CategoriesController::class, 'index'])->name('categories.index');

    // Create
    Route::post('/category/create', [CategoriesController::class, 'create'])->name('categories.create');

    // Delete
    Route::delete('/category/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
});
