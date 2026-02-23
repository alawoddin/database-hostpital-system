@extends('admin.admin_master')
@section('admin')

<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">Reports</h5>
                </div>

                <div class="card-body">

                    <div class="row">

                         <!-- Search By Month -->
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <form action="{{ route('search.all.by.date') }}" method="post">
                                        @csrf

                                        <h4>Search By Date</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Select Date</label>
                                            <input class="form-control" type="date" name="date"  id="example-text-input">

                                       
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">
                                            Search
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>


                        <!-- Search By Month -->
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <form action="{{ route('search.all.by.month') }}" method="post">
                                        @csrf

                                        <h4>Search By Month</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Select Month</label>

                                            <select name="month" class="form-select">
                                                <option value="">Select Month</option>
                                                <option value="1">January</option>
                                                <option value="2">February</option>
                                                <option value="3">March</option>
                                                <option value="4">April</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">August</option>
                                                <option value="9">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">
                                            Search
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div> 

                        <!-- Search By Year -->

                        <div class="col-sm-4
                            <div class="card">
                                <div class="card-body">

                                    <form action="{{ route('search.all.by.year') }}" method="post">
                                        @csrf

                                        <h4>Search By Year</h4>

                                        <div class="mb-3">
                                            <label class="form-label">Select Year</label>

                                            <select name="year" class="form-select">
                                                <option value="">Select Year</option>             
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100">
                                            Search
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

@endsection