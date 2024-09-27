@extends('admin.layout.index')

@section('title')
    TEAM
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <h3>Edit Team</h3>
        </div>
    </div>
    <div class="col-lg-12">
        <form action="{{ route('admin.Team.update', $edit_team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $edit_team->id }}">
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculty Category<span style="color: red">*</span></label>
                    <select name="faculty_cat_id" class="form-control" id="category">
                        <option value="">Select Faculty Category</option>
                        @foreach ($categories as $category)
                            <option {{ ($category->id == $edit_team->faculty_cat_id) ? 'selected' : '' }}
                                value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Faculty Subcategory<span style="color: red">*</span></label>
                    <select name="faculty_subcat_id" class="form-control" id="subcategory">
                        <option value="">Select Faculty Subcategory</option>
                        @foreach ($subcategories as $subcategory)
                            <option {{ ($subcategory->id == $edit_team->faculty_subcat_id) ? 'selected' : '' }}
                                value="{{ $subcategory->id }}"> {{ $subcategory->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{ $edit_team->name }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Designation<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="designation" value="{{ $edit_team->designation }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Qualification<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="qualification" value="{{ $edit_team->qualification }}" placeholder="Enter Qualification"
                        required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Email<span style="color: red">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ $edit_team->email }}" placeholder="Enter Email"
                        required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Phone<span style="color: red">*</span></label>
                    <input type="number" class="form-control" name="phone" value="{{ $edit_team->phone }}" placeholder="Enter Phone"
                        required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Photo<span style="color: red">*</span></label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Facebook ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="facebook" value="{{ $edit_team->facebook }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Instagram ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="instagram" value="{{ $edit_team->instagram }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">X ID<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="x" value="{{ $edit_team->x }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="notice_type" class="form-label">Resume<span
                            style="color: red">*</span></label>
                    <input type="file" class="form-control" name="resume" accept=".pdf">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="notice_type" class="form-label">Short description<span style="color: red">*</span></label>
                    <input type="text" class="form-control" name="s_description"
                        value="{{ $edit_team->s_description }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
                <textarea class="form-control texteditor" name="details"cols="30" rows="4">{{ $edit_team->details }}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {

                var faculty_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.faculty.getsubcategory') }}',
                    data: {
                        'faculty_id': faculty_id,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#subcategory').empty();
                        $('#subcategory').html('<option value="">Select</option>');
                        $.each(response, function(key, value) {
                            $('#subcategory').append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    },
                });
            });
        });
    </script>
@endsection
