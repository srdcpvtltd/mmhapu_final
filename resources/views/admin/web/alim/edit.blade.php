@extends('admin.layout.index')

@section('title')
    ALIM
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit ALIM</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.alim.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $alimEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the Madrasa<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $alimEdit->name }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="managment" value="{{ $alimEdit->managment }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="regulating" class="form-label">Regulating Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="regulating" value="{{ $alimEdit->regulating }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course" value="{{ $alimEdit->course }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" value="{{ $alimEdit->intake }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="District" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" value="{{ $alimEdit->district }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" value="{{ $alimEdit->address }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $alimEdit->email }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Incharge" class="form-label">Incharge of Madrasa<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="incharge" value="{{ $alimEdit->incharge }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" value="{{ $alimEdit->contact }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" value="{{ $alimEdit->code }}" required>
                    </div>
                    {{-- <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" accept=".pdf">
                    </div> --}}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
