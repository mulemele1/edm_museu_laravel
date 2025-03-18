<!-- resources/views/help.blade.php -->
@extends('dashboard.index')

@section('content')
<!-- Cole o conteúdo de help.html aqui -->
 <!-- Exibir mensagem de sucesso -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Exibir mensagem de erro -->
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!-- Exibir erros de validação -->
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endforeach

@endsection