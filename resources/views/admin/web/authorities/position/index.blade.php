@extends('admin.layout.index')

@section('title')
    University Authorities Position
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.position.store') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New University Authority Position</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Title<span>*</span></label>
                                    <select name="title_id" class="form-control" required>
                                        <option value="">---Select---</option>
                                        @foreach ($titles as $data)
                                            <option value="{{ $data->id }}">{{ $data->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-label">Position<span>*</span></label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position"
                                        required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                    {{ __('btn_save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h5>Manage University Authorities</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Position</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($positionList as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->getTitle->title }}</td>
                                                <td>{{ $data->position }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $data->id }}">
                                                        Edit
                                                    </button>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.position.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>

                                            <!-- Edit Modal -->
                                            <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $data->id }}">
                                                                Edit Title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close">X</button>
                                                        </div>
                                                        <form action="{{ route('admin.position.update', $data->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id"
                                                                value="{{ $data->id }}">
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Title</label>
                                                                    <select name="title_id" class="form-control">
                                                                        <option value="">---Select---</option>
                                                                        @foreach ($titles as $title)
                                                                            <option value="{{ $title->id }}"
                                                                                {{ $data->title_id == $title->id ? 'selected' : '' }}>
                                                                                {{ $title->title }} </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="title{{ $data->id }}"
                                                                        class="form-label">Title</label>
                                                                    <input type="text" class="form-control"
                                                                        id="title{{ $data->id }}" name="position"
                                                                        value="{{ $data->position }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
