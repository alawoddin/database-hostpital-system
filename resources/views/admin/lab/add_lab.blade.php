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
                    <form action="{{ route('store.lab') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label" for="abc">LAB Price</label>
                                            <input type="text" class="form-control" name="price"
                                                placeholder="Enter LAB price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Store Button -->
                        <button type="submit" class="btn btn-primary mb-3 ms-3">
                            Store
                        </button>
                    </form>
                    <!-- Row ends -->

                </div>

            </div>
        </div>

    </div>
@endsection
