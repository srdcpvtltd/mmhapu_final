@extends('admin.layout.index')

@section('title')
    IQAC EVENT
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-5">
                    <form class="needs-validation" action="{{ route('admin.IqacEvent.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New IQAC Event</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Title<span>*</span></label>
                                    <select class="form-control" name="title_id">
                                        <option value="">Select Title</option>
                                        @foreach ($title as $data)
                                        <option value="{{ $data->id }}"> {{ $data->title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="form-label">Image<span>*</span></label>
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
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
                            <h5>Manage IQAC Event</h5>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($events as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    @if ($data->IqacTitle)
                                                    {{ $data->IqacTitle->title }}
                                                    @endif
                                                </td>
                                                <td><img src="{{ asset('IQAC Event/' . $data->image) }}" alt="" width="80"></td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.IqacEvent.edit',$data->id)}}">Edit</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.IqacEvent.delete', $data->id) }}')">Delete</a>
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
