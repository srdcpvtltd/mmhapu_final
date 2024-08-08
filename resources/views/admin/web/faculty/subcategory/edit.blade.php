@extends('admin.layout.index')

@section('title')
    FACULTY-SUBCATEGORY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Faculty Subcategory</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.faculty.subcategory.update') }}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Faculty Category Name<span
                                style="color: red">*</span></label>
                        <select class="form-control" name="faculty_id">
                            <option value="">Select Name</option>
                            @foreach ($categories as $category)
                                <option {{($category->id == $edit->faculty_id) ? 'selected' : ''}} value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value=" {{$edit->name}} ">
                    </div>
                    
                    <div class="col-lg-6 mb-3">
                        <label for="phone" class="form-label">Phone<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number"  value=" {{$edit->phone}} ">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email"  value=" {{$edit->email}} ">
                    </div>
                    <div class="col-lg-12 mb-12">
                        <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="3">{{$edit->description}}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('web/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
    <script src="{{ asset('web/js/fontawesome-iconpicker.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            $('.iconPicker').iconpicker().on('iconpickerSelected', function(e) {
                $(this).closest('.form-group').find('.iconpicker-input').val(
                    `<i class="${e.iconpickerValue}"></i>`);
            });
        })(jQuery);
    </script>
@endsection
