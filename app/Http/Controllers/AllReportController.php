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


}
