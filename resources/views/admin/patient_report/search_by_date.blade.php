@extends('admin.admin_master')
@section('admin')

<div class="container">

    <div style="background:white; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.05);">

        <!-- Header -->
        <div style="display:flex; justify-content:space-between; margin-bottom:30px;">
            <div>
                <h3 style="margin:0;">Dr Ghawsuddin Khedmat</h3>
                <div style="color:gray;">Daily Visits Report</div>
            </div>

            <div style="text-align:right;">
                <div><strong>Report Date:</strong></div>
                <div style="color:#4e73df; font-size:18px;">
                    {{ \Carbon\Carbon::parse($date)->format('Y-m-d') }}
                </div>
            </div>
        </div>

        <!-- Table -->
        <table style="width:100%; border-collapse:collapse;">
            <thead>
                <tr style="background:#f8f9fc;">
                    <th style="padding:12px; border:1px solid #eee;">#</th>
                    <th style="padding:12px; border:1px solid #eee;">Patient Name</th>
                    <th style="padding:12px; border:1px solid #eee;">Visit Number</th>
                    <th style="padding:12px; border:1px solid #eee;">Time</th>
                </tr>
            </thead>

            <tbody>
                @forelse($visits as $key => $visit)
                    <tr>
                        <td style="padding:10px; border:1px solid #eee;">
                            {{ $key + 1 }}
                        </td>

                        <td style="padding:10px; border:1px solid #eee;">
                            {{ $visit->patient->name ?? 'N/A' }}
                        </td>

                        <td style="padding:10px; border:1px solid #eee;">
                            {{ $visit->visit_number }}
                        </td>

                        <td style="padding:10px; border:1px solid #eee;">
                            {{ $visit->created_at->format('H:i') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding:20px; text-align:center; color:gray;">
                            No visits found for this date
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Totals -->
        <div style="margin-top:30px; display:flex; justify-content:flex-end;">
            <div style="width:300px;">

                <div style="display:flex; justify-content:space-between; padding:8px 0;">
                    <span>Total Visits:</span>
                    <strong>{{ $visits->count() }}</strong>
                </div>

                <div style="display:flex; justify-content:space-between; padding:8px 0; font-size:18px;">
                    <strong>Total Visit Number:</strong>
                    <strong style="color:#4e73df;">
                        {{ $visits->sum('visit_number') }}
                    </strong>
                </div>

            </div>
        </div>

        <!-- Print Button -->
        <div style="margin-top:30px; text-align:right;">
            <button onclick="window.print()"
                    style="background:#1cc88a; color:white; border:none; padding:10px 20px; border-radius:6px; cursor:pointer;">
                🖨 Print Report
            </button>
        </div>

    </div>
</div>

@endsection