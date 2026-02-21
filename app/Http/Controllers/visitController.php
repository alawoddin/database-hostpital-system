<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Visit;
use Illuminate\Http\Request;

class visitController extends Controller
{
    public function AllVisit() {
        $alldata = Visit::with('patient')->latest()->get();
        return view('admin.visit.all_visit', compact('alldata'));
    }

    public function AddVisit()
{
    $patients = Patient::latest()->get();
    return view('admin.visit.add_visit', compact('patients'));
}

public function StoreVisit(Request $request)
{
    $request->validate([
        'patient_id.*'   => 'required|exists:patients,id',
        'visit_number.*' => 'required|numeric',
    ]);

    foreach ($request->patient_id as $key => $patient) {

        Visit::create([
            'patient_id'   => $patient,
            'visit_number' => $request->visit_number[$key],
        ]);
    }

    return redirect()->route('all.visit')->with([
        'message' => 'Visit Inserted Successfully',
        'alert-type' => 'success'
    ]);
}

    public function EditVisit($id) {
        $visit = Visit::findOrFail($id);
        $patients = Patient::latest()->get();
        return view('admin.visit.edit_visit', compact('visit', 'patients'));
    }

    public function UpdateVisit(Request $request) {
        $visit_id = $request->id;

        $request->validate([
            'patient_id'   => 'required|exists:patients,id',
            'visit_number' => 'required|numeric',
        ]);

        Visit::findOrFail($visit_id)->update([
            'patient_id'   => $request->patient_id,
            'visit_number' => $request->visit_number,
        ]);

        $notification = [
            'message' => 'Visit Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('all.visit')->with($notification);
    }

    public function DeleteVisit($id) {
        Visit::findOrFail($id)->delete();

        $notification = [
            'message' => 'Visit Deleted Successfully',
            'alert-type' => 'error'
        ];

        return redirect()->route('all.visit')->with($notification);
    }

 

}
