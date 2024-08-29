@extends('admin.layout.index')

@section('title')
    B.Ed
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage B.Ed</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.bed.add') }}">Add New B.Ed</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Designation</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Document</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($Bed as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->contact }}</td>
                        <td>
                            <embed src="{{ asset('uploads/bed/' . $data->resume) }}" type="application/pdf"
                                width="100" height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary btn-sm"
                                href="{{ route('admin.bed.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.bed.delete', $data->id) }}')"><i
                                    class="fas fa-trash-alt"></i></a>
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
