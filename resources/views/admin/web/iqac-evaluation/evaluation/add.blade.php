@extends('admin.layout.index')

@section('title')
    IQAC EVALUAION REPORT
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Evaluation Report</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Quicklink.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        {{-- <input type="text" class="form-control" name="title" placeholder="Enter Title" required> --}}
                        <select class="form-control" name="">
                            <option value="">Choose Title</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Name<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span
                                style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
