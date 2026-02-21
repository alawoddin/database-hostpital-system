@extends('admin.admin_master')

@section('admin')

<div class="app-body">
    <hr/>

    <div class="title">
        <h1 class="title-header">Edit LAB</h1>
    </div>

    <hr/>

    <!-- Row starts -->
    <form action="{{ route('update.lab') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $lab->id }}">

       

        <div class="row">
            <div class="col-sm-4 col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="m-0">
                            <label class="form-label" for="abc">Update LAB Price</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                name="price" value="{{ $lab->price }}"
                                placeholder="Enter LAB price"
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
