@extends('admin.layout.index')

@section('title')
    Application Online Certificate
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Application Online Certificate</h5>
            <div class="header-elements">
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Roll No.</th>
                    <th>Request No.</th>
                    <th>Applied Certificate</th>
                    <th>Date of Applied</th>
                    <th>Payment Status</th>
                    <th>Transaction Number</th>
                    <th>Transaction Date</th>
                    <th>Payment Method</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($certificates as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->roll_no }}</td>
                        <td>{{ $data->request_id }}</td>
                        <td>{{ $data->certificate }}</td>
                        <td>{{ $data->recive_degree }}</td>
                        <td><span class="badge
                            {{ $data->payment ? 'bg-success' : 'bg-warning' }}">
                            {{ $data->payment ?? 'Pending' }}
                        </span></td>
                        <td>{{ optional($data->getPayment)->transaction_number ?? 'N/A' }}</td>
                        <td>{{ optional($data->getPayment)->transation_date ?? 'N/A' }}</td>
                        <td>{{ optional($data->getPayment)->method ?? 'N/A' }}</td>
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
