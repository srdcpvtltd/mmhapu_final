@extends('admin.layout.index')

@section('title')
    SYLLABUS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Syllabus</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.syllabus.add') }}">Add Syllabus</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>File</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($syllabus as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->getTitle->title }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            <embed src="{{ asset('uploads/syllabus/' . $data->file) }}" type="application/pdf" width="100" height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.syllabus.edit', $data->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.syllabus.delete', $data->id) }}')"><i
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
            var isConfirmed = confirm("Are you sure you want to delete Faculty Subcategory?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
