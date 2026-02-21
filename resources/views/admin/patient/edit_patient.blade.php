@extends('admin.admin_master')

@section('admin')

<div class="app-body">

        <div class="row gx-3">
            <div class="col-sm-12">
                <div class="card mb-3">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Default</h5>

                    </div>




  

    <!-- Row starts -->
    <form action="{{ route('update.patient') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $patient->id }}">

       

        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="abc">Update Patient Name</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="name" value="{{ $patient->name }}"
                                placeholder="Enter Patient name"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Store Button -->
        <button type="submit" class="btn btn-primary mb-3 ms-3">
            Update
        </button>
    </form>
    <!-- Row ends -->

</div>

            </div>
            </div>
            </div>

@endsection
