@extends('admin.layout.index')

@section('title')
    Facility
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Facility</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.facility.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" value=" {{ $edit->title }} " required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="images" class="form-label">Images<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="images[]" accept="image/*" multiple>

                        @php
                            $images = json_decode($edit->images, true);
                        @endphp
                        @if (is_array($images))
                            @foreach ($images as $image)
                                <img src="{{ asset('Facility/' . $image) }}" alt=""
                                    style="width: 100px; height: auto; margin: 5px;">
                            @endforeach
                        @endif
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                            <textarea class="form-control" name="description" id="Editor">{{ $edit->description }}</textarea>
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('web/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('Editor');
    </script>
@endsection
