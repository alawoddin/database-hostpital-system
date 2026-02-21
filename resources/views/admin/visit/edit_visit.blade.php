@extends('admin.admin_master')

@section('admin')
<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Visit</h5>
                </div>

                <form action="{{ route('update.visit') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $visit->id }}">
                    <div class="row">

                        <!-- Patient Dropdown -->
                        <div class="col-sm-4 col-12">
                            <div class="card mb-4">
                                <div class="card-body">

                                    <label class="form-label">Patient Name</label>

                                    <select class="form-control" name="patient_id" required>
                                        <option value="">Choose Patient</option>

                                        @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}"
                                                {{ $visit->patient_id == $patient->id ? 'selected' : '' }}>
                                                {{ $patient->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>

                        <!-- Visit Number -->
                        <div class="col-sm-4 col-12">
                            <div class="card mb-4">
                                <div class="card-body">

                                    <label class="form-label">Visit Number</label>

                                    <input type="number"
                                           class="form-control"
                                           name="visit_number"
                                           value="{{ $visit->visit_number }}"
                                           required>

                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary mb-3 ms-3">
                        Update
                    </button>

                </form>

            </div>
        </div>
    </div>

</div>
@endsection