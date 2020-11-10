<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Site\MainController as SiteMain;
use \App\Http\Controllers\Panel\MainController as PanelMain;
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

# Rotas do site
 Route::name("site.")->group(function () {

    #Rotas do Controller Main ou (Principal)
    Route::name("main")->group(function () {

        #Rota index do site
        Route::get('/', [SiteMain::class, "index"])->name("index");
    });
});


Auth::routes();

#Rota do painel
Route::middleware("panel")->name("panel.")->group(function () {

    #Rota do controller Main ou (Principal)
    Route::name("main")->group(function () {

        #Rota index do painel
        Route::get('/painel-de-controle/', [PanelMain::class, "index"])->name("index");
    });
});


#Rota do system
Route::name("system.")->group(function () {

    #Rota do controller Main ou (Principal)
    Route::name("main")->group(function () {

        #Rota index do controle de sistema
        Route::get('/system/', [PanelMain::class, "index"])->name("index");
    });
});



