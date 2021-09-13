<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/o-nas', [AboutController::class, 'show'])->name('about');
Route::get('/blog', [BlogController::class, 'show'])->name('blog');
Route::get('/ceny', [PriceController::class, 'show'])->name('price');
Route::get('/kontakty', [ContactController::class, 'show'])->name('contact');
Route::get('/vakansii', [CareerController::class, 'show'])->name('career');
Route::get('/portfolio', [PortfolioController::class, 'show'])->name('portfolio');
Route::get('/faq', [FAQController::class, 'show'])->name('faq');

// Services
Route::get('/podyom-doma', [ServiceController::class, 'show'])->name('raising_house');
Route::get('/remont-fundamenta', [ServiceController::class, 'foundationRepairShow'])->name('foundation_repair');
Route::get('/zamena-nizhnih-vencov-doma', [ServiceController::class, 'replacementRimsHouseShow'])->name('replacement_rims_house');
//
Route::get('/demontazh-sten', [ServiceController::class, 'dismantlingWallsShow'])->name('dismantling_walls');
Route::get('/demontazh-polov', [ServiceController::class, 'dismantlingFloorsShow'])->name('dismantling_floors');
Route::get('/demontazh-zdanij-i-sooruzhenij', [ServiceController::class, 'dismantlingBuildingsShow'])->name('dismantling_buildings');
Route::get('/demontazh-metallokonstrukcij', [ServiceController::class, 'metalStructuresShow'])->name('dismantling_metal_structures');
//
Route::get('/stroitelstvo-karkasnyh-domov', [ServiceController::class, 'frameHousesShow'])->name('frame_houses');
//
Route::get('/obshivka-sajdingom', [ServiceController::class, 'sidingShow'])->name('siding');
Route::get('/obshivka-blok-hausom', [ServiceController::class, 'claddingBlockHouseShow'])->name('cladding_block_house');
Route::get('/obshivka-doma-derevom', [ServiceController::class, 'houseCladdingWoodShow'])->name('house_cladding_wood');
Route::get('/pokraska-fasada-doma', [ServiceController::class, 'paintingFacadeHouseShow'])->name('painting_facade_house');
//
Route::get('/kladka-pechi-kamina', [ServiceController::class, 'ovenMasonryShow'])->name('oven_masonry');
Route::get('/oblicovka-pechi-kamina', [ServiceController::class, 'ovenCladdingShow'])->name('oven_cladding');
Route::get('/montazh-kotla-otopleniya', [ServiceController::class, 'installationHeatingBoilerShow'])->name('installation_heating_boiler');
Route::get('/montazh-dymohoda', [ServiceController::class, 'chimneyInstallationShow'])->name('chimney_installation');
//
//'uhod-za-mogilami'
//
//'remont-i-chistka-kolodcev'
//
//'vyvoz-musora'
//'pokos-travy'
//'kopka-transhej'
//'uborka-pridomovoj-territorii'
//
//'ukladka-laminata'
//'ukladka-parketa'
//'ukladka-derevyannogo-pola'
//'ukladka-fanery-na-pol'
//'ukladka-polovoj-doski'
