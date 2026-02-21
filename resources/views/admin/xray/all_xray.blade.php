@extends('admin.admin_master')

@section('admin')


<div class="app-body">
    <hr />

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Default</h5>

                    <a href="{{ route('add.xray') }}" class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-lg"></i> Add Xray
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-outer">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover m-0 truncate">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alldata as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('edit.xray', $item->id) }}">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <a class="btn btn-danger btn-sm" id="delete" href="{{ route('delete.xray', $item->id) }}">
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
@endsection
