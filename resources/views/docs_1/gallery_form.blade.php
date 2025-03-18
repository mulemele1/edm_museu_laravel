@extends('dashboard.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastro de Item</div>
                
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Nome do Objeto -->
                        <div class="mb-3">
                            <label for="nome_objeto" class="form-label">Nome do Objeto</label>
                            <input 
                                type="text" 
                                id="nome_objeto" 
                                name="nome_objeto" 
                                class="form-control @error('nome_objeto') is-invalid @enderror"
                                value="{{ old('nome_objeto') }}"
                            >
                            @error('nome_objeto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Quantidade -->
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input 
                                type="number" 
                                id="quantidade" 
                                name="quantidade" 
                                class="form-control @error('quantidade') is-invalid @enderror"
                                value="{{ old('quantidade') }}"
                                min="1"
                            >
                            @error('quantidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Ano de Fabrico -->
                        <div class="mb-3">
                            <label for="ano_fabrico" class="form-label">Ano de Fabrico</label>
                            <input 
                                type="number" 
                                id="ano_fabrico" 
                                name="ano_fabrico" 
                                class="form-control @error('ano_fabrico') is-invalid @enderror"
                                value="{{ old('ano_fabrico') }}"
                                min="1900"
                                max="{{ date('Y') }}"
                            >
                            @error('ano_fabrico')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Funcionalidade -->
                        <div class="mb-3">
                            <label for="funcionalidade" class="form-label">Funcionalidade</label>
                            <textarea 
                                id="funcionalidade" 
                                name="funcionalidade" 
                                class="form-control @error('funcionalidade') is-invalid @enderror"
                                rows="3">{{ old('funcionalidade') }}</textarea>
                            @error('funcionalidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Características -->
                        <div class="mb-3">
                            <label for="caracteristicas" class="form-label">Características</label>
                            <textarea 
                                id="caracteristicas" 
                                name="caracteristicas" 
                                class="form-control @error('caracteristicas') is-invalid @enderror"
                                rows="3">{{ old('caracteristicas') }}</textarea>
                            @error('caracteristicas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Fabricante -->
                        <div class="mb-3">
                            <label for="fabricante" class="form-label">Fabricante</label>
                            <input 
                                type="text" 
                                id="fabricante" 
                                name="fabricante" 
                                class="form-control @error('fabricante') is-invalid @enderror"
                                value="{{ old('fabricante') }}"
                            >
                            @error('fabricante')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Constituição -->
                        <div class="mb-3">
                            <label for="constituicao" class="form-label">Constituição</label>
                            <textarea 
                                id="constituicao" 
                                name="constituicao" 
                                class="form-control @error('constituicao') is-invalid @enderror"
                                rows="3">{{ old('constituicao') }}</textarea>
                            @error('constituicao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Localização -->
                        <div class="mb-3">
                            <label for="localizacao" class="form-label">Localização</label>
                            <input 
                                type="text" 
                                id="localizacao" 
                                name="localizacao" 
                                class="form-control @error('localizacao') is-invalid @enderror"
                                value="{{ old('localizacao') }}"
                            >
                            @error('localizacao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Estado -->
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select 
                                id="estado" 
                                name="estado" 
                                class="form-select @error('estado') is-invalid @enderror"
                            >
                                <option value="">Selecione o estado</option>
                                <option value="Novo">Novo</option>
                                <option value="Usado">Usado</option>
                                <option value="Reformado">Reformado</option>
                            </select>
                            @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Data -->
                        <div class="mb-3">
                            <label for="data" class="form-label">Data</label>
                            <input 
                                type="date" 
                                id="data" 
                                name="data" 
                                class="form-control @error('data') is-invalid @enderror"
                                value="{{ old('data') ?? date('Y-m-d') }}"
                            >
                            @error('data')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Inventariador -->
                        <div class="mb-3">
                            <label for="inventariador" class="form-label">Inventariador</label>
                            <input 
                                type="text" 
                                id="inventariador" 
                                name="inventariador" 
                                class="form-control @error('inventariador') is-invalid @enderror"
                                value="{{ old('inventariador') }}"
                            >
                            @error('inventariador')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Foto -->
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input 
                                type="file" 
                                id="foto" 
                                name="foto" 
                                class="form-control @error('foto') is-invalid @enderror"
                                accept="image/*"
                            >
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Cadastrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection