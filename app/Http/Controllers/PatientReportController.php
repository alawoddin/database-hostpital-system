<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;

class PatientReportController extends Controller
{
    public function AllPatientReport()
    {
        return view('admin.patient_report.all_patient_report');
    }

    public function AdminSearchByDate(Request $request)
    {
        $date = $request->date;

        if (!$date) {
            return back()->with('error', 'Please select date');
        }

        $visits = Visit::with('patient')
            ->whereDate('created_at', $date)
            ->latest()
            ->get();

        return view('admin.patient_report.search_by_date', compact('visits', 'date'));
    }

public function SearchByMonth(Request $request)
{
    $month = $request->month;

    if (!$month) {
        return back()->with('error', 'Please select month');
    }

    $visits = Visit::with('patient')
        ->whereMonth('created_at', $month)
        ->latest()
        ->get();


        $totalVisitNumber = $visits->sum('visit_number');


    return view('admin.patient_report.month_report', compact('visits', 'month' , 'totalVisitNumber'));
}

public function SearchByYear(Request $request)
{
    $year = $request->year;

    if (!$year) {
        return back()->with('error', 'Please select year');
    }

    $visits = Visit::with('patient')
        ->whereYear('created_at', $year)
        ->orderBy('created_at')
        ->get()
        ->groupBy(function ($visit) {
            return $visit->created_at->format('m'); // group by month
        });

    return view('admin.patient_report.search_year', compact('visits', 'year'));
}





}
