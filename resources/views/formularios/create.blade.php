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
                                                <h3 class="mb-3">Preencha o formulário abaixo</h3>
                                                <form action="{{ route('formularios.store') }}" method="post" enctype="multipart/form-data>
                                                    @csrf
                                                    @include('formularios/partials/form')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--//container-xl-->
                        </div><!--//app-content-->
                    </div>
                </div>
            </div>
        </div>

        <footer class="app-footer">
            <div class="container text-center py-3">
                <!-- Footer content here -->
            </div>
        </footer><!--//app-footer-->
        </div><!--//app-wrapper-->

        <script>
            document.querySelector('a[href="#form-section"]').addEventListener('click', function (event) {
                event.preventDefault();
                document.querySelector('#form-section').scrollIntoView({ behavior: 'smooth' });
            });
        </script>
        </div>
        </div>
        </div>
    </body>
@endsection