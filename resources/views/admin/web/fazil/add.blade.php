@extends('admin.layout.index')

@section('title')
    FAZIL
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add FAZIL</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.fazil.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the Madrasa<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="managment" placeholder="Enter Managment" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="regulating" class="form-label">Regulating Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="regulating" placeholder="Enter Regulating Body" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course" placeholder="Enter course" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" placeholder="Enter Intake" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="District" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Enter District" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Incharge" class="form-label">Incharge of Madrasa<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="incharge" placeholder="Enter Incharge of Madrasa" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" placeholder="Enter Contact" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" placeholder="Enter Code" required>
                    </div>
                    {{-- <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter Document"
                            accept=".pdf" required>
                    </div> --}}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
