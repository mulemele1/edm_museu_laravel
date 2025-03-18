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
            <form action="{{ route('docs_1.update', $form->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="field1" class="form-label">Campo 1</label>
                        <input type="text" class="form-control" id="field1" name="field1" value="{{ $form->field1 }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="field2" class="form-label">Campo 2</label>
                        <input type="text" class="form-control" id="field2" name="field2" value="{{ $form->field2 }}" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="field3" class="form-label">Campo 3</label>
                        <input type="text" class="form-control" id="field3" name="field3" value="{{ $form->field3 }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="field4" class="form-label">Campo 4</label>
                        <input type="text" class="form-control" id="field4" name="field4" value="{{ $form->field4 }}" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="field5" class="form-label">Campo 5</label>
                        <input type="text" class="form-control" id="field5" name="field5" value="{{ $form->field5 }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="field6" class="form-label">Campo 6</label>
                        <input type="text" class="form-control" id="field6" name="field6" value="{{ $form->field6 }}" required>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="dropdown" class="form-label">Dropdown</label>
                        <input type="text" class="form-control" id="dropdown" name="dropdown" value="{{ $form->dropdown }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="field7" class="form-label">Campo 7</label>
                        <input type="text" class="form-control" id="field7" name="field7" value="{{ $form->field7 }}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection
