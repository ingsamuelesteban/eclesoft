<?php



declare(strict_types=1);



use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\RegistrerController;


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
    
   Route::middleware('guest')->group(function () {
       
    
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('/register', [RegistrerController::class, 'store']);
});
    
    //Rutas del Menu 
    Route::get('/dashboard', [MenuController::class, 'index'] )->middleware(['auth', 'verified'])->name('menu.index');
    
    
    
    //Rutas bautismo
    
    Route::get('/bautismos/create', [BautismoController::class, 'create'] )->middleware(['auth', 'verified'])->name('menu.bautismos.create');
    Route::get('/bautismos/index', [BautismoController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.bautismos.index');
    Route::get('/bautismos/{bautismo}/edit', [BautismoController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.bautismos.edit');
    Route::get('/bautismos/{bautismo}', [BautismoController::class, 'show'] )->middleware(['auth', 'verified'])->name('menu.bautismos.show');
    Route::get('/bautismos/{bautismo}/print', [BautismoController::class, 'pdf'] )->middleware(['auth', 'verified'])->name('menu.bautismos.print');
    
    //Rutas matrimonio 
    
    Route::get('/matrimonios/create', [MatrimonioController::class, 'create'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.create');
    Route::get('/matrimonios/index', [MatrimonioController::class, 'index'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.index');
    Route::get('/matrimonios/{matrimonio}/edit', [MatrimonioController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.edit');
    Route::get('/matrimonios/{matrimonio}', [MatrimonioController::class, 'show'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.show');
    Route::get('/matrimonios/{matrimonio}/print', [MatrimonioController::class, 'pdf'] )->middleware(['auth', 'verified'])->name('menu.matrimonios.print');
   
    //Rutas Comunidades 
    
    Route::get('/comunidades/create',[ComunidadesController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.comunidades.create');
    Route::get('/comunidades/index', [ComunidadesController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.comunidades.index');
    
    //Rutas Certificaciones

    Route::get('/certificaciones/index', [CertificacionesController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.certificaciones.index');

    //Rutas NoBautizado

    Route::get('/nobautizado/index',[NoBautizadoController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.nobautizado.index');
    Route::get('/nobautizado/create',[NoBautizadoController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.nobautizado.create');
    Route::get('/nobautizado/{noBautizado}/edit', [NoBautizadoController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.nobautizado.edit');
    Route::get('/nobautizado/{noBautizado}', [NoBautizadoController::class, 'show'] )->middleware(['auth', 'verified'])->name('menu.nobautizado.show');
    Route::get('/nobautizado/{noBautizado}/print', [NoBautizadoController::class, 'pdf'] )->middleware(['auth', 'verified'])->name('menu.nobautizado.print');


    //Rutas Administracion 
    Route::get('/administracion/index', [AdministracionController::class, 'index'])->middleware(['auth', 'verified'])->name('menu.administracion.index');
    Route::get('/administracion/create', [AdministracionController::class, 'create'])->middleware(['auth', 'verified'])->name('menu.administracion.create');
    Route::get('/administracion/{parroquia}edit', [AdministracionController::class, 'edit'] )->middleware(['auth', 'verified'])->name('menu.administracion.edit');
    Route::get('/administracion/register', [AdministracionController::class, 'register'])->middleware(['auth', 'verified']
    )->name('menu.administracion.registrar');
    

    require __DIR__.'/auth.php';

});


