@extends('admin.admin_master')

@section('admin')

<div class="app-body">
    <hr/>

    <div class="title">
        <h1 class="title-header">All Procedures</h1>
    </div>

    <hr/>

    <!-- Row starts -->
    <form action="{{ route('store.procedure') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="abc">Procedure Price</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="price"
                                placeholder="Enter Procedure price"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Store Button -->
        <button type="submit" class="btn btn-primary">
            Store
        </button>
    </form>
    <!-- Row ends -->

</div>

@endsection
