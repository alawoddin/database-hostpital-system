

<style>
    .month-title {
        background: #4e73df;
        color: white;
        padding: 10px;
        border-radius: 6px;
        margin-top: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th {
        background: #f8f9fc;
    }

    th, td {
        padding: 10px;
        border: 1px solid #edf2f9;
    }

    .month-total {
        background: #f8f9fc;
        font-weight: bold;
    }
</style>

<div class="container">

    <h3>Yearly Visits Report — {{ $year }}</h3>

    @forelse($visits as $month => $monthVisits)

        <!-- MONTH HEADER -->
        <div class="month-title">
            {{ date('F', mktime(0, 0, 0, $month, 10)) }}
        </div>

        <!-- MONTH TABLE -->
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Patient Name</th>
                    <th>Visit Number</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach($monthVisits as $key => $visit)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $visit->patient->name ?? 'N/A' }}</td>
                        <td>{{ $visit->visit_number }}</td>
                        <td>{{ $visit->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach

                <!-- MONTH TOTAL ROW -->
                <tr class="month-total">
                    <td colspan="2">Total for {{ date('F', mktime(0, 0, 0, $month, 10)) }}</td>

                    <td>
                        {{ $monthVisits->sum('visit_number') }}
                    </td>

                    <td>
                        Visits Count: {{ $monthVisits->count() }}
                    </td>
                </tr>

            </tbody>
        </table>

    @empty
        <div style="padding:20px; color:gray;">
            No visits found for this year
        </div>
    @endforelse

    <!-- PRINT -->
    <div style="margin-top:25px; text-align:right;">
        <button onclick="window.print()" class="btn btn-success">
            🖨 Print Report
        </button>
    </div>

</div>
