@extends('admin.layout.index')

@section('title')
    COLLABRATION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Collabration</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Collabration.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Intitution<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intitution" value=" {{ $edit->intitution }} " required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="document" accept=".pdf">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                        <textarea class="form-control texteditor" name="description" cols="30" rows="10" placeholder="Enter Description" arequired> {{ $edit->description }} </textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
