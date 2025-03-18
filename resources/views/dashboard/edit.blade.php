@extends('dashboard.index')

@section('content')
<div class="container-xl">
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Edit Doc</h1>
        </div>
    </div>
    <form action="{{ route('docs.update', $form->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="field1" class="form-label">Field 1</label>
                    <input type="text" name="field1" class="form-control" value="{{ $form->field1 }}" required>
                </div>
                <div class="mb-3">
                    <label for="field2" class="form-label">Field 2</label>
                    <input type="text" name="field2" class="form-control" value="{{ $form->field2 }}" required>
                </div>
                <div class="mb-3">
                    <label for="field3" class="form-label">Field 3</label>
                    <input type="text" name="field3" class="form-control" value="{{ $form->field3 }}" required>
                </div>
                <div class="mb-3">
                    <label for="field4" class="form-label">Field 4</label>
                    <input type="text" name="field4" class="form-control" value="{{ $form->field4 }}" required>
                </div>
                <div class="mb-3">
                    <label for="field5" class="form-label">Field 5</label>
                    <input type="text" name="field5" class="form-control" value="{{ $form->field5 }}" required>
                </div>
                <div class="mb-3">
                    <label for="field6" class="form-label">Field 6</label>
                    <input type="text" name="field6" class="form-control" value="{{ $form->field6 }}" required>
                </div>
                <div class="mb-3">
                    <label for="dropdown" class="form-label">Dropdown</label>
                    <input type="text" name="dropdown" class="form-control" value="{{ $form->dropdown }}" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="field7" class="form-label">Field 7</label>
                    <input type="text" name="field7" class="form-control" value="{{ $form->field7 }}" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
