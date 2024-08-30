@extends('admin.layout.index')

@section('title')
    University Administration
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit University Administration</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.university_officers.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $university_officersEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id" required>
                            <option value="">Choose Title</option>
                            @foreach ($edit as $title)
                                <option {{ ($title->id ==$university_officersEdit->title_id )? 'selected': '' }} value=" {{ $title->id }} "> {{ $title->title }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" value="{{ $university_officersEdit->designation }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $university_officersEdit->name }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Image<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="image" accept=".jpg, .jpeg, .png, .gif">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Resume<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" accept=".pdf">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
