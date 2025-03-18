<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\Docs1Controller;
use App\Http\Controllers\GalleryController;

//Route::resource('forms', FormularioController::class);

Route::delete('/formularios/{id}', [FormularioController::class, 'delete'])->name('formularios.delete');
Route::put('/formularios/{id}', [FormularioController::class, 'update'])->name('formularios.update');
Route::get('/formularios/{id}/edit', [FormularioController::class, 'edit'])->name('formularios.edit');
Route::get('/formularios/list', [FormularioController::class, 'list'])->name('formularios.list');
Route::get('/formularios/create', [FormularioController::class, 'create'])->name('formularios.create');
Route::post('/formularios', [FormularioController::class, 'store'])->name('formularios.store');
Route::get('/formularios/{id}', [FormularioController::class, 'show'])->name('formularios.show');
Route::get('/formularios/details_form/{id}', [FormularioController::class, 'details_form'])->name('formularios/details_form');


Route::get('/docs_1', [Docs1Controller::class, 'index'])->name('docs_1.index');
Route::get('/docs_1/{id}/edit', [Docs1Controller::class, 'edit'])->name('docs_1.edit');
Route::put('/docs_1/{id}', [Docs1Controller::class, 'update'])->name('docs_1.update');
Route::delete('/docs_1/{id}', [Docs1Controller::class, 'destroy'])->name('docs_1.destroy');
//Route::get('/docs_1', [GalleryController::class, 'gallery_form'])->name('docs_1.gallery_form');

Route::post('/formularios-submit', [FormularioController::class, 'submit'])->name('formularios.submit');
//Route::get('/exposicao-online', [FormularioController::class, 'exposicao'])->name('exposicao.online');

// Rota para a página inicial
Route::get('/', function () {
    return view('dashboard.overview');
})->name('home');

/**PLANO MUSEU */
Route::view('/museu', 'Museu.Museu');

Route::get('/museu', function () {
    return view('Museu.Museu'); // Corrigido para 'dashboard.charts'
})->name('Museu');

Route::view('/museu/equipe', 'Museu.Equipe');
Route::view('/museu/plano-operacional/geracao', 'Museu.Plano_operacional.Geracao');
Route::view('/museu/plano-operacional/transporte', 'Museu.Plano_operacional.Transporte');
Route::view('/museu/plano-operacional/distribuicao', 'Museu.Plano_operacional.Distribuicao');
Route::view('/museu/plano-operacional/comercial', 'Museu.Plano_operacional.Comercial');
/*SOBRE EDM */
Route::view('/sobre-edm/mvv', 'Sobre_EDM.Edm_MVV');
Route::view('/sobre-edm/distribuicao', 'Sobre_EDM.Distribuicao');
Route::view('/sobre-edm/producao', 'Sobre_EDM.Producao');
Route::view('/sobre-edm/transmissao', 'Sobre_EDM.Transmissao');

/*HISTORIA DA ELETRIFICAÇÃO */
Route::view('/historia-eletrificacao/geracoes', 'Historia_eletrificacao.Geracoes');
Route::view('/historia-eletrificacao/transporte', 'Historia_eletrificacao.Transporte');
Route::view('/historia-eletrificacao/distribuicao', 'Historia_eletrificacao.Distribuicao');
Route::view('/historia-eletrificacao/comercial', 'Historia_eletrificacao.Comercial');

/*EVENTOS */
Route::view('/eventos/exposicao-online', 'Eventos.Exposicao_online');
Route::view('/eventos/publicacao-de-narrativas', 'Eventos.Publicacao_de_Narrativas');
Route::view('/eventos/historias-de-vida', 'Eventos.Historias_de_Vida');
Route::view('/eventos/linha-de-tempo', 'Eventos.Linha_de_Tempo');


// Rotas de autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);

// Rota de logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/handle-button-click', [DashboardController::class, 'handleButtonClick'])->name('handle.button.click');
    
    // Rota para a página overview protegida por autenticação
    Route::get('/overview', function () {
        return view('dashboard.overview'); // Corrigido para 'dashboard.overview'
    })->name('overview');
});

// Adicionar as rotas para docs, charts, help
// Route::get('/docs', function () {
//     return view('dashboard.docs_1'); // Corrigido para 'dashboard.docs'
// })->name('docs_1');

Route::get('/charts', function () {
    return view('dashboard.charts'); // Corrigido para 'dashboard.charts'
})->name('charts');

Route::get('/help', function () {
    return view('dashboard.help'); // Corrigido para 'dashboard.help'
})->name('help');

Route::get('/form', function () {
    return view('help'); // ou o nome relevante da view
})->name('form');


