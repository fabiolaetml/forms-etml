<?php

use Illuminate\Support\Facades\Route;
use Filament\Facades\Filament;
use Filament\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ExitInterviewController;
use App\Livewire\CreateExitInterview;
use App\Livewire\CreateTerminationInterview;
/*use App\Filament\Resources\ExitInterviewResource\Pages\CreateExitInterview;*/

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

Route::name('filament.')
    ->group(function () {
        foreach (Filament::getPanels() as $panel) {
            /** @var \Filament\Panel $panel */
            $panelId = $panel->getId();
            $hasTenancy = $panel->hasTenancy();
            $tenantRoutePrefix = $panel->getTenantRoutePrefix();
            $tenantSlugAttribute = $panel->getTenantSlugAttribute();
            $domains = $panel->getDomains();
            
            Route::middleware(['web']) // Adicione o middleware 'web' para permitir sessões e cookies
                ->name('auth.')
                ->group(function () use ($panel) {
                    if ($panel->hasLogin()) {
                        Route::get('/', $panel->getLoginRouteAction())->name('login'); // Defina a rota de login como página inicial
                    }
                });
        }
    });

Route::middleware(['web', 'auth']) // Adicione o middleware 'auth' para garantir que o usuário esteja autenticado
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard'); // Substitua 'dashboard' pelo nome da sua view do painel de administração
        })->name('dashboard');
        
        Route::post('/logout', LogoutController::class)->name('logout'); // Rota de logout
    });

 /* Route::get('/formulariodedesligamento', [Controller::class, 'showExitInterviewForm'])->name('formulariodedesligamento');*/
  Route::get('/formulario', CreateExitInterview::class);
  Route::get('/formulariodedesligamento', CreateTerminationInterview::class);
  Route::get('/exit-interview/create', function () {
    return view('exit-interview-create', [
        'page' => CreateExitInterview::class,
    ]);
});