<?php



declare(strict_types=1);



use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\BautismoController;
use App\Http\Controllers\ComunidadesController;
use App\Http\Controllers\MatrimonioController;


/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,

    
])
->group(function () {
    Route::get('/', function () {
        return view('tenantw');
   
   });
    
    
    
    //Rutas del Menu 
    Route::get('/dashboard', [MenuController::class, 'index'] )->middleware(['auth', 'verified'])->name('menu.index');
    
    
    
    //Rutas bautismo
    
    Route::get('/bautismos/create', [BautismoController::class, 'create'] )->middleware(['auth', 'verified'])->name('menu.bautismos.create');
    Route::get('/bautismos/index', [BautismoController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.bautismos.index');
    Route::get('/bautismos/{bautismo}/edit', [BautismoController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.bautismos.edit');
    Route::get('/bautismos/{bautismo}/print', [BautismoController::class, 'pdf'] )->middleware(['auth', 'verified'])->name('menu.bautismos.print');
    //Rutas matrimonio 
    
    Route::get('/matrimonios/create', [MatrimonioController::class, 'create'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.create');
    
    //Rutas Comunidades 
    
    Route::get('/comunidades/create',[ComunidadesController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.comunidades.create');
    Route::get('/comunidades/index', [ComunidadesController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.comunidades.index');
    
    //Rutas Administracion 
    Route::get('/administracion/index', [AdministracionController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.administracion.index');
    Route::get('/administracion/create', [AdministracionController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.administracion.create');
    Route::get('/administracion/{parroquia}edit', [AdministracionController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.administracion.edit');
    Route::get('/administracion/register', [AdministracionController::class, 'register'])->middleware(['auth', 'verified']
    )->name('menu.administracion.registrar');
    

    require __DIR__.'/auth.php';

});


