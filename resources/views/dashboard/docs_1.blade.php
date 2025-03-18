@extends('dashboard.index')

@section('content')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Artigos Publicados</h1>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                @if ($forms->isEmpty())
                    <p>Nenhum documento encontrado.</p>
                @else
                    @foreach($forms as $form)
                    <div class="col">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder">
                                @if ($form->foto)
                                    <img src="{{ asset('storage/' . $form->foto) }}" alt="Image" class="app-card-img">
                                @else
                                    <img src="{{ asset('default-image.jpg') }}" alt="No Image" class="app-card-img">
                                @endif
                                <span class="badge bg-success">NEW</span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">
                                <h4 class="app-doc-title truncate mb-0">{{ $form->nome_do_objeto }}</h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Funcionalidade:</span> {{ $form->funcionalidade }}</li>
                                        <li><span class="text-muted">Quantidade:</span> {{ $form->quantidade }}</li>
                                        <li><span class="text-muted">Fabricante:</span> {{ $form->fabricante }}</li>
                                        <li><span class="text-muted">Data:</span> {{ $form->data }}</li>
                                    </ul>
                                </div>
                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle no-toggle-arrow" type="button" id="dropdownMenuButton{{ $form->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $form->id }}">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('forms.edit', $form->id) }}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                                    </svg>
                                                    Editar
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('forms.destroy', $form->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                        </svg>
                                                        Apagar
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--//app-card-actions-->
                            </div><!--//app-card-body-->
                        </div><!--//app-card-->
                    </div><!--//col-->
                    @endforeach
                @endif
            </div><!--//row-->
        </div><!--//container-xl-->
    </div><!--//app-content-->
</div><!--//app-wrapper-->
@endsection

<style>
.app-card-thumb-holder {
    position: relative;
    padding: 0;
}

.img-holder {
    width: 100%;
    height: 200px; /* Adjust as needed */
    position: relative;
    overflow: hidden;
}

.app-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.app-card-thumb-holder .badge {
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 10;
}
</style>
