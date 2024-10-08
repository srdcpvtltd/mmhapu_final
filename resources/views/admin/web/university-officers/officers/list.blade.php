@extends('admin.layout.index')

@section('title')
    University Administration
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage University Administration</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.university_officers.add') }}">Add University
                        Administration</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Designation</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Resume</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($university_officersList as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->getTitle->title }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>{{ $data->name }}</td>
                        <td> <img src="{{asset('uploads/universityOfficer/' . $data->image)}}" width="100" height="100"> </td>
                        <td>
                            <embed src="{{ asset('uploads/universityOfficer/' . $data->resume) }}" type="application/pdf"
                                width="100" height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.university_officers.edit', $data->id) }}"><i class="far fa-edit"></i>
                                Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.university_officers.delete', $data->id) }}')"><i
                                    class="fas fa-trash-alt"></i> Delete</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
