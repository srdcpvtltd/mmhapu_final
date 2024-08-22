@extends('admin.layout.index')

@section('title')
    Student Grievance Redressal Committee
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Student Grievance Redressal</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.studentGrievance.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="intitution" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intitution" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" placeholder="Enter Contact" required>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
