@extends('admin.layout.index')

@section('title')
    B.Ed
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add B.Ed</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.bed.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">Management<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="management" placeholder="Enter Management" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Affiliting" class="form-label">Affiliting Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="affiliting" placeholder="Enter Affiliting Body" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Course Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" placeholder="Enter Intake" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="district" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Enter District" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="website" class="form-label">Website<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="website" placeholder="Enter Website" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="director" class="form-label">Director/Princepal<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="director" placeholder="Enter Director/Princepal" required>
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
                        <label for="AICTE" class="form-label">AICTE<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter AICTE"
                            accept=".pdf" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
