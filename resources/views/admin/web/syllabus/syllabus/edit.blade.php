@extends('admin.layout.index')

@section('title')
    IQAC EVALUAION REPORT
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Evaluation Report</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.syllabus.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id" required>
                            <option value="">Choose Title</option>
                            @foreach ($title as $titles)
                                <option value=" {{ $titles->id }} " {{($titles->id == $edit->title_id) ? 'selected' : ''}}> {{ $titles->title }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value=" {{ $edit->name }} " required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
