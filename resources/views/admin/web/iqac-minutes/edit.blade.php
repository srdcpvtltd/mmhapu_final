@extends('admin.layout.index')

@section('title')
    IQAC MINUTES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit IQAC Minutes</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.minutes.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="policy" class="form-label">Minutes<span style="color: red">*</span></label>
                        <textarea class="form-control texteditor" name="iqac_minutes" cols="30" rows="10"
                            placeholder="Enter Policy" required> {!! $edit->iqac_minute !!} </textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="document" placeholder="Enter Document"
                            accept=".pdf" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
