@extends('admin.layout.index')

@section('title')
    KRC With AICTE Recognition
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add KRC With AICTE Recognition</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.krcWithAicte.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="file_no" class="form-label">File No.<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="file_no" placeholder="Enter File No." required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the KRCN<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="management" placeholder="Enter Management"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="affiliating" class="form-label">Affiliting Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="affiliating" placeholder="Enter Affiliting Body"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course_name" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course_name" placeholder="Enter Course Name"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" placeholder="Enter Intake" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Session" class="form-label">Session<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="session" placeholder="Enter Session" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="district" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Enter District" required>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="incharge" class="form-label">Incharge of KRCN<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="incharge" placeholder="Enter Incharge of KRCN"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" placeholder="Enter Contact" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" placeholder="Enter Code" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter Document"
                            accept=".pdf" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="address" class="form-label">Address<span style="color: red">*</span></label>
                        <textarea name="address" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
