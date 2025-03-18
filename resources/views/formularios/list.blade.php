<!-- resources/views/help.blade.php -->
@extends('dashboard.index')

@section('content')
<body class="app">
  <div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
      <div class="container-xl"></div>

      <div class="row">
        <div class="col-12 mt-3">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="card mt-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h3 class="card-title">LISTA DOS EVENTOS</h3>
                      <div class="card-tools">
                        <a href="{{ route('formularios.create') }}" class="btn btn-primary btn-sm rounded">
                          <i class="fas fa-plus"></i> ADICIONAR NOVO
                        </a>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      @if(session('success'))
                        <div class="alert alert-success">
                          {{ session('success') }}
                        </div>
                      @endif

                      @if(session('error'))
                        <div class="alert alert-danger">
                          {{ session('error') }}
                        </div>
                      @endif

                      <div class="table-responsive">
                        <table id="example" class="table table-bordered table-striped table-hover table-sm">
                          <thead>
                            <tr>
                              <th style="width: 10px">#</th>
                              <th>Nome do Objeto</th>
                              <th>Quantidade</th>
                              <th>Ano de Fabrico</th>
                              <th>Funcionalidade</th>
                              <th>Estado</th>
                              <th>Data</th>
                              <th>Inventariador</th>
                              <th style="width: 100px;">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($formularios as $fonte)
                                <tr>
                                  <td>{{ $fonte->id }}</td>
                                  <td>{{ $fonte->nome_objeto }}</td>
                                  <td>{{ $fonte->quantidade }}</td>
                                  <td>{{ $fonte->ano_fabrico }}</td>
                                  <td>{{ $fonte->funcionalidade }}</td>
                                  <td>{{ $fonte->estado }}</td>
                                  <td>{{ $fonte->data }}</td>
                                  <td>{{ $fonte->inventariador }}</td>
                                 
                                  <td class="text-center">
                                    <form action="{{ route('formularios.delete', $fonte->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este item?');">
                                      @method('DELETE')
                                      @csrf
                                      <div class="btn-group">
                                      
                                        <a role="button" class="btn btn-sm bg-lightblue" href="{{ url('formularios.details', $fonte->id) }}" title="Ver">
                                          <i class="fas fa-eye"></i>
                                        </a>
                                        <a role="button" class="btn btn-sm bg-lightblue" href="{{ route('formularios.edit', $fonte->id) }}" title="Editar">
                                          <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <button type="submit" class="btn btn-sm bg-danger" title="Excluir">
                                          <i class="fas fa-trash"></i>
                                        </button>
                                      </div>
                                    </form>
                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div> <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
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
</body>
@endsection