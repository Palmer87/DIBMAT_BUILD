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
Route::get('construction-metallique', [HomeController::class, 'service_construction'])->name('home.service_construction');
Route::get('/batiment', [HomeController::class, 'batiment'])->name('home.batiment');
Route::get('/travaux-climatisation', [HomeController::class, 'climatisation'])->name('home.climatisation');
Route::get('/travaux-electricite-energie', [HomeController::class, 'electricite_energie'])->name('home.electricite');
Route::get('/projets-realises', [HomeController::class, 'projets'])->name('home.projets');
Route::get('/projets-realises/{slug}', [HomeController::class, 'projets_detail'])->name('projets.detail');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact', [HomeController::class, 'contact_store'])->name('contact.store');
Route::get('/actualites', [HomeController::class, 'actualites'])->name('home.actualites');
Route::get('/actualites/{slug}', [HomeController::class, 'actualites_show'])->name('actualites.show');
Route::get('/devis', [HomeController::class, 'devis'])->name('home.devis');
Route::post('/devis', [HomeController::class, 'devis_store'])->name('devis.store');







// Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');



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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route ::resource('projets', ProjetController::class);
    

    //--------------- Message ------------//
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

    //--------------- Devis ------------//
    Route::resource('devis', DevisController::class)->only(['index', 'destroy']);
    Route::get('devis/{slug}', [DevisController::class, 'show'])->name('devis.show');

    
    //--------------- Article ------------//
    Route::resource('articles', ArticleController::class);


    Route::get('/liste-user', [DashboardController::class, 'liste_user'])->name('user.liste');
    Route::delete('/delete-user/{user}', [DashboardController::class, 'destroy'])->name('user.destroy');


    
});

require __DIR__.'/auth.php';
