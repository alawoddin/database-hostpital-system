@extends('admin.admin_master')

@section('admin')
<div class="app-body">

    <div class="row gx-3">
        <div class="col-sm-12">
            <div class="card mb-3">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Add Visits</h5>

                    <button type="button" class="btn btn-success" id="addRow">
                        <i class="fa fa-plus"></i> Add Row
                    </button>
                </div>

                <div class="card-body">

                    <form action="{{ route('store.visit') }}" method="POST">
                        @csrf

                        <div id="visitWrapper">

                            <!-- FIRST ROW -->
                            <div class="row visitRow align-items-end mb-3 border-bottom pb-3">

                                <!-- Row Number -->
                                <div class="col-sm-1">
                                    <label class="form-label">#</label>
                                    <input type="text" class="form-control rowNumber" value="1" readonly>
                                </div>

                                <!-- Patient -->
                                <div class="col-sm-4">
                                    <label class="form-label">Patient Name</label>

                                    <select class="form-control" name="patient_id[]" required>
                                        <option value="">Choose Patient</option>

                                        @foreach ($patients as $patient)
                                            <option value="{{ $patient->id }}">
                                                {{ $patient->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Visit Number -->
                                <div class="col-sm-4">
                                    <label class="form-label">Visit Number</label>

                                    <input type="number"
                                           class="form-control"
                                           name="visit_number[]"
                                           placeholder="Enter Visit Number"
                                           required>
                                </div>

                                <!-- Remove -->
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-danger removeRow w-100">
                                        <i class="fa fa-trash"></i> Remove
                                    </button>
                                </div>

                            </div>

                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-save"></i> Store Visits
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- ✅ jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
$(document).ready(function(){

    let rowCount = 1;

    // ✅ ADD ROW
    $('#addRow').click(function(){

        rowCount++;

        let row = `
        <div class="row visitRow align-items-end mb-3 border-bottom pb-3">

            <div class="col-sm-1">
                <input type="text" class="form-control rowNumber"
                       value="${rowCount}" readonly>
            </div>

            <div class="col-sm-4">
                <select class="form-control" name="patient_id[]" required>
                    <option value="">Choose Patient</option>

                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}">
                            {{ $patient->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-4">
                <input type="number"
                       class="form-control"
                       name="visit_number[]"
                       placeholder="Enter Visit Number"
                       required>
            </div>

            <div class="col-sm-2">
                <button type="button" class="btn btn-danger removeRow w-100">
                    <i class="fa fa-trash"></i> Remove
                </button>
            </div>

        </div>`;

        $('#visitWrapper').append(row);
    });

    // ✅ REMOVE ROW
    $(document).on('click', '.removeRow', function(){

        $(this).closest('.visitRow').remove();
        updateRowNumbers();
    });

    // ✅ FIX ROW NUMBERS
    function updateRowNumbers(){

        rowCount = 0;

        $('.visitRow').each(function(){

            rowCount++;
            $(this).find('.rowNumber').val(rowCount);
        });
    }

});
</script>

@endsection