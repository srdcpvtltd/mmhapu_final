@extends('admin.layout.index')

@section('title')
    IQAC EVENT TITLE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit IQAC Event Title</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.IqacEventTitle.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$edit->id}}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" value="{{$edit->title}}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="year" class="form-label">Year<span style="color: red">*</span></label>
                        <select name="year_id" class="form-control" required>
                            <option value="">Select Year</option>
                            @foreach ($years as $year)
                                <option value="{{ $year->id }} "> {{ $year->year }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="image" class="form-label">Image<span style="color: red">*</span></label>
                        <input type="file" class="form-control" accept="image/*" name="image">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
