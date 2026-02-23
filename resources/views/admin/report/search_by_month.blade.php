@extends('admin.admin_master')
@section('admin')

<div class="app-body">

    @isset($month)

    @php
        $monthName = date('F', mktime(0, 0, 0, $month, 1));

        $totalRecords =
            $icu->count()
            + $opd->count()
            + $xray->count()
            + $lab->count()
            + $consultation->count()
            + $procedure->count()
            + $eeg->count();

        $totalRevenue =
            $icu->sum('price')
            + $opd->sum('price')
            + $xray->sum('price')
            + $lab->sum('price')
            + $consultation->sum('price')
            + $procedure->sum('price')
            + $eeg->sum('price');
    @endphp

    <div class="card shadow-sm">
        <div class="card-header">
            <h5>Report For Month: {{ $monthName }}</h5>
        </div>

        <div class="card-body">

            @if($totalRecords == 0)

                {{-- EMPTY STATE --}}
                <div class="text-center" style="padding:60px; color:gray;">
                    <i class="bi bi-calendar-x" style="font-size:50px;"></i>
                    <h5 class="mt-3">No Records Found</h5>
                    <div>No visits were registered for this month</div>
                </div>

            @else

                {{-- REPORT TABLE --}}
                <table class="table table-bordered table-hover align-middle">
                    <thead style="background:#f8f9fc;">
                        <tr>to now not 
                            <th>Department</th>
                            <th>Total Records</th>
                            <th>Total Revenue</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>ICU</td>
                            <td>{{ $icu->count() }}</td>
                            <td>{{ number_format($icu->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>OPD</td>
                            <td>{{ $opd->count() }}</td>
                            <td>{{ number_format($opd->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>X-Ray</td>
                            <td>{{ $xray->count() }}</td>
                            <td>{{ number_format($xray->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>Lab</td>
                            <td>{{ $lab->count() }}</td>
                            <td>{{ number_format($lab->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>Consultation</td>
                            <td>{{ $consultation->count() }}</td>
                            <td>{{ number_format($consultation->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>Procedure</td>
                            <td>{{ $procedure->count() }}</td>
                            <td>{{ number_format($procedure->sum('price'), 2) }}</td>
                        </tr>

                        <tr>
                            <td>EEG</td>
                            <td>{{ $eeg->count() }}</td>
                            <td>{{ number_format($eeg->sum('price'), 2) }}</td>
                        </tr>

                        {{-- TOTAL ROW --}}
                        <tr style="font-weight:bold; background:#f8f9fc; font-size:16px;">
                            <td>Total</td>
                            <td>{{ $totalRecords }}</td>
                            <td style="color:#4e73df;">
                                {{ number_format($totalRevenue, 2) }}
                            </td>
                        </tr>

                    </tbody>
                </table>

            @endif

        </div>
    </div>

    @endisset

</div>

@endsection