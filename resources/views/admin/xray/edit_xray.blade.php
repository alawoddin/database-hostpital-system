@extends('admin.admin_master')

@section('admin')

<div class="app-body">
    <hr/>

    <div class="title">
        <h1 class="title-header">Edit Xray</h1>
    </div>

    <hr/>

    <!-- Row starts -->
    <form action="{{ route('update.xray') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $xray->id }}">

       

        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="abc">Update Xray Price</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="price" value="{{ $xray->price }}"
                                placeholder="Enter Xray price"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Store Button -->
        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </form>
    <!-- Row ends -->

</div>

@endsection
