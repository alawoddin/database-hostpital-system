@extends('admin.admin_master')
@section('admin')

<div class="app-body">

@isset($year)

@php
    $yearTotalCount = collect($months)->sum('totalCount');
    $yearTotalRevenue = collect($months)->sum('totalRevenue');
@endphp

<div class="card shadow-sm">
    <div class="card-header">
        <h5>Yearly Department Analytics: {{ $year }}</h5>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">
            <thead style="background:#f8f9fc;">
                <tr>
                    <th>Month</th>
                    <th>ICU</th>
                    <th>OPD</th>
                    <th>EEG</th>
                    <th>X-Ray</th>
                    <th>Lab</th>
                    <th>Consultation</th>
                    <th>Procedure</th>
                    <th>Total Records</th>
                    <th>Total Revenue</th>
                </tr>
            </thead>

            <tbody>

            @foreach($months as $month)

                @if($month['totalCount'] > 0)

                <tr>
                    <td><strong>{{ $month['name'] }}</strong></td>

                    <td>
                        {{ $month['icuCount'] }}
                        <br>
                        <small>{{ number_format($month['icuRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['opdCount'] }}
                        <br>
                        <small>{{ number_format($month['opdRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['eegCount'] }}
                        <br>
                        <small>{{ number_format($month['eegRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['xrayCount'] }}
                        <br>
                        <small>{{ number_format($month['xrayRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['labCount'] }}
                        <br>
                        <small>{{ number_format($month['labRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['consultationCount'] }}
                        <br>
                        <small>{{ number_format($month['consultationRevenue'], 2) }}</small>
                    </td>

                    <td>
                        {{ $month['procedureCount'] }}
                        <br>
                        <small>{{ number_format($month['procedureRevenue'], 2) }}</small>
                    </td>

                    <td><strong>{{ $month['totalCount'] }}</strong></td>
                    <td><strong>{{ number_format($month['totalRevenue'], 2) }}</strong></td>
                </tr>

                @endif

            @endforeach

            <tr style="font-weight:bold; background:#f8f9fc;">
                <td>Total Year</td>
                <td colspan="7"></td>
                <td style="color:#4e73df;">{{ $yearTotalCount }}</td>
                <td style="color:#1cc88a;">
                    {{ number_format($yearTotalRevenue, 2) }}
                </td>
            </tr>

            </tbody>
        </table>

    </div>
</div>

@endisset

</div>

@endsection