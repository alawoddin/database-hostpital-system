<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\EEG;
use App\Models\ICU;
use App\Models\LAB;
use App\Models\OPD;
use App\Models\Procedure;
use App\Models\Xray;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AllReportController extends Controller
{

    public function AllReport()
    {
        return view('admin.report.all_report');
    }

public function SearchAllByDate(Request $request)
{
    $request->validate([
        'date' => 'required|date'
    ]);

    $date = Carbon::parse($request->date)->format('Y-m-d');

    $icu = ICU::whereDate('created_at', $date)->get();
    $opd = OPD::whereDate('created_at', $date)->get();
    $xray = Xray::whereDate('created_at', $date)->get();
    $lab = LAB::whereDate('created_at', $date)->get();
    $consultation = Consultation::whereDate('created_at', $date)->get();
    $procedure = Procedure::whereDate('created_at', $date)->get();
    $eeg = EEG::whereDate('created_at', $date)->get();

    return view('admin.report.search_by_date', compact(
        'date', 'icu', 'opd', 'xray', 'lab', 'consultation', 'procedure', 'eeg'
    ));
}

  public function SearchAllByMonth(Request $request)
{
    $request->validate([
        'month' => 'required|integer|min:1|max:12'
    ]);

    $month = $request->month;

    $icu = ICU::whereMonth('created_at', $month)->get();
    $opd = OPD::whereMonth('created_at', $month)->get();
    $xray = Xray::whereMonth('created_at', $month)->get();
    $lab = LAB::whereMonth('created_at', $month)->get();
    $consultation = Consultation::whereMonth('created_at', $month)->get();
    $procedure = Procedure::whereMonth('created_at', $month)->get();
    $eeg = EEG::whereMonth('created_at', $month)->get();

    return view('admin.report.search_by_month', compact(
        'month', 'icu', 'opd', 'xray', 'lab', 'consultation', 'procedure', 'eeg'
    ));
}

public function SearchAllByYear(Request $request)
{
    $request->validate([
        'year' => 'required|integer|min:2020|max:2100'
    ]);

    $year = $request->year;
    $months = [];

    for ($month = 1; $month <= 12; $month++) {

        // COUNTS
        $icuCount = ICU::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $opdCount = OPD::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $eegCount = EEG::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $xrayCount = Xray::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $labCount = LAB::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $consultationCount = Consultation::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $procedureCount = Procedure::whereYear('created_at', $year)->whereMonth('created_at', $month)->count();

        // REVENUE
        $icuRevenue = ICU::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $opdRevenue = OPD::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $eegRevenue = EEG::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $xrayRevenue = Xray::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $labRevenue = LAB::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $consultationRevenue = Consultation::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');
        $procedureRevenue = Procedure::whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('price');

        $months[$month] = [
            'name' => date('F', mktime(0, 0, 0, $month, 1)),

            'icuCount' => $icuCount,
            'opdCount' => $opdCount,
            'eegCount' => $eegCount,
            'xrayCount' => $xrayCount,
            'labCount' => $labCount,
            'consultationCount' => $consultationCount,
            'procedureCount' => $procedureCount,

            'icuRevenue' => $icuRevenue,
            'opdRevenue' => $opdRevenue,
            'eegRevenue' => $eegRevenue,
            'xrayRevenue' => $xrayRevenue,
            'labRevenue' => $labRevenue,
            'consultationRevenue' => $consultationRevenue,
            'procedureRevenue' => $procedureRevenue,

            'totalCount' =>
                $icuCount +
                $opdCount +
                $eegCount +
                $xrayCount +
                $labCount +
                $consultationCount +
                $procedureCount,

            'totalRevenue' =>
                $icuRevenue +
                $opdRevenue +
                $eegRevenue +
                $xrayRevenue +
                $labRevenue +
                $consultationRevenue +
                $procedureRevenue,
        ];
    }

    return view('admin.report.search_by_year', compact('months', 'year'));
}



}
