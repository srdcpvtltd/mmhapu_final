@extends('admin.layout.index')

@section('title')
    Committees
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Committees</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.committe.add') }}">Add Committees</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($committees as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>
                            @if ($data->getTitle)
                                {{ $data->getTitle->title }}
                            @endif
                        </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->contact }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.committe.edit', $data->id) }}"><i class="far fa-edit"></i>
                                Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.committe.delete', $data->id) }}')"><i
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
