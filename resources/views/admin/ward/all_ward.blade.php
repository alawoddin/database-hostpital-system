@extends('admin.admin_master')

@section('admin')

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>



<div class="app-body">
    <hr />

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Default</h5>

                    <a href="{{ route('add.ward') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-lg"></i> Add Ward
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                             <table id="patientsTable" class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wards as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('edit.ward', $item->id) }}">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <a class="btn btn-danger btn-sm" id="delete" href="{{ route('delete.ward', $item->id) }}">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
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
    $(document).ready(function () {
        $('#patientsTable').DataTable({
            pageLength: 10,
            ordering: true,
            searching: true,
            lengthChange: true,
            columnDefs: [
                { orderable: false, targets: 2 }
            ]
        });
    });
</script>

@endsection
