<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;

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

//--------HOME -------------//
Route::get('/', [HomeController::class, 'accueil'])->name('home.accueil');
Route::get('/notre-histoire', [HomeController::class, 'histoire'])->name('home.histoire');
Route::get('/notre-expertise', [HomeController::class, 'expertise'])->name('home.expertise');
Route::get('/projets-realises', [HomeController::class, 'projets'])->name('home.projets');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/actualites', [HomeController::class, 'actualites'])->name('home.actualites');
Route::get('/devis', [HomeController::class, 'devis'])->name('home.devis');


Route::get('/test-404', function () {
    return 'Route fonctionne !';
});





// Route::get('/', function () {
//     return view('welcome');

// });


Route::get('/dashboard/{slug}', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Routes publiques
// Route::get('/', [ArticleController::class, 'index'])->name('public.home');
// Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('public.articles.show');
// Route::get('/devis', [DevisController::class, 'create'])->name('public.devis.create');
// Route::post('/devis', [DevisController::class, 'store'])->name('public.devis.store');
// Route::get('/contact', [MessageController::class, 'create'])->name('public.contact.create');
// Route::post('/contact', [MessageController::class, 'store'])->name('public.contact.store');
// Route::get('/projets',[ProjetController::class,'indexpublic'])->name('public.projets.index');
// Route::get('/projets/{slug}', [ProjetController::class,'showpublic'])->name('public.projets.show');

// Routes back-office (protégées par auth)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Route::resource('articles', ArticleController::class)->except(['index', 'show']);
    // Route::resource('devis', DevisController::class)->only(['index', 'destroy']);
    // Route::get('devis/{slug}', [DevisController::class, 'show'])->name('devis.show');
    // Route ::resource('projets', ProjetController::class);
    // Route::resource('messages', MessageController::class)->only(['index', 'destroy',  'repondre','reponse']);
    // Route::get('messages/{slug}', [MessageController::class, 'show'])->name('messages.show');
    // Route::post('messages/repondre/{message}',[MessageController::class,'repondre'])->name('messages.repondre');
    // Route::get('messages/reponse/{message}',[MessageController::class,'reponse'])->name('messages.reponse');
    // Route::get('articles', [ArticleController::class, 'adminIndex'])->name('admin.articles.index');
});

require __DIR__.'/auth.php';
