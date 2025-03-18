<!-- resources/views/help.blade.php -->
@extends('dashboard.index')

@section('content')

    <body class="app">
        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">

                    <div>
                        <div class="app-content pt-3 p-md-3 p-lg-4 d-flex justify-content-center align-items-center">
                            <div class="container-xl">
                                <div class="row g-3 mb-4 align-items-center justify-content-between">
                                    <div id="form-section" class="app-card shadow-sm mb-4 border-left-decoration"
                                        role="alert">
                                        <div class="inner">
                                            <div class="app-card-body p-3 p-lg-4">
                                                <div class="card-header">
                                                    <h3 class="card-title">Editar: {{ $formulario->nome_objeto }}</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form action=" {{ route('formularios.update', $formulario->id) }} "
                                                    method="post">
                                                    @method('put')
                                                    @include('formularios.partials.form')
                                                </form>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        </div>
    </body>
@endsection