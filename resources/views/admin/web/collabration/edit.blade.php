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
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" value="{{ $edit->designation }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $edit->name }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $edit->email }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="contact" value="{{ $edit->contact }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="resume" class="form-label">Resume<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter Resume" accept=".pdf">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <embed src="{{ asset('uploads/collabration/' . $edit->resume) }}" type="application/pdf"  height="100">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
