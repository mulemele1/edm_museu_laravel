@extends('dashboard.index')

@section('content')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Edit Document</h1>
                </div>
            </div>
<!-- Exemplo do conteúdo da view edit_1.blade.php -->
<form action="{{ route('forms.update', $form->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
        @if($form->foto)
            <img src="{{ asset('storage/' . $form->foto) }}" alt="Foto" width="100">
        @endif
    </div>
    <div class="form-group">
        <label for="nome_do_objeto">Nome do Objeto</label>
        <input type="text" class="form-control" id="nome_do_objeto" name="nome_do_objeto" value="{{ $form->nome_do_objeto }}">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $form->quantidade }}">
    </div>
    <div class="form-group">
        <label for="ano_de_fabrico">Ano de Fabrico</label>
        <input type="number" class="form-control" id="ano_de_fabrico" name="ano_de_fabrico" value="{{ $form->ano_de_fabrico }}">
    </div>
    <div class="form-group">
        <label for="funcionalidade">Funcionalidade</label>
        <input type="text" class="form-control" id="funcionalidade" name="funcionalidade" value="{{ $form->funcionalidade }}">
    </div>
    <div class="form-group">
        <label for="caracteristicas">Características</label>
        <textarea class="form-control" id="caracteristicas" name="caracteristicas">{{ $form->caracteristicas }}</textarea>
    </div>
    <div class="form-group">
        <label for="fabricante">Fabricante</label>
        <input type="text" class="form-control" id="fabricante" name="fabricante" value="{{ $form->fabricante }}">
    </div>
    <div class="form-group">
        <label for="constituicao">Constituição</label>
        <input type="text" class="form-control" id="constituicao" name="constituicao" value="{{ $form->constituicao }}">
    </div>
    <div class="form-group">
        <label for="localizacao">Localização</label>
        <input type="text" class="form-control" id="localizacao" name="localizacao" value="{{ $form->localizacao }}">
    </div>
    <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado" value="{{ $form->estado }}">
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="date" class="form-control" id="data" name="data" value="{{ $form->data }}">
    </div>
    <div class="form-group">
        <label for="inventariador">Inventariador</label>
        <input type="text" class="form-control" id="inventariador" name="inventariador" value="{{ $form->inventariador }}">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

        </div>
    </div>
</div>
@endsection
