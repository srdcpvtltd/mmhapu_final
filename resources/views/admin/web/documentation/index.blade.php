@extends('admin.layout.index')

@section('title')
    DOCUMENTATION
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.documentation.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Documentation</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Button Text<span>*</span></label>
                                    <input type="text" name="btn_text" class="form-control" placeholder="Enter Button Text"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="title" class="form-label">Color<span>*</span></label>
                                    <input type="color" name="color" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="form-label">Document<span>*</span></label>
                                    <input type="file" name="file" class="form-control" accept=".pdf" required>
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
                            <h5>Manage Documentation</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Button Text</th>
                                            <th>Color</th>
                                            <th>Document</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($documentation as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->btn_text }}</td>
                                                <td>{{ $data->color }}</td>
                                                <td>
                                                    <embed src="{{ asset('uploads/Documentation/' . $data->file) }}"
                                                        type="application/pdf" width="100" height="80">
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('admin.documentation.edit', $data->id) }}">Edit</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.documentation.delete', $data->id) }}')">Delete</a>
                                                </td>
                                            </tr>
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
