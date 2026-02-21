<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function AllPatient() {
        $patients = Patient::all();
        return view('admin.patient.all_patient', compact('patients'));
    }

    public function AddPatient() {
        return view('admin.patient.add_patient');
    }

    public function StorePatient(Request $request) {
        Patient::insert([
            'name' => $request->name,
        ]);

           $notification = array(
            'message' => 'Patient Added Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('all.patient')->with($notification);
    }

    public function EditPatient($id) {
        $patient = Patient::findOrFail($id);
        return view('admin.patient.edit_patient', compact('patient'));
    }

    public function UpdatePatient(Request $request) {
        $patient_id = $request->id;

        Patient::findOrFail($patient_id)->update([
            'name' => $request->name,
        ]);

           $notification = array(
            'message' => 'Patient Updated Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('all.patient')->with($notification);
    }

    public function DeletePatient($id) {
        Patient::findOrFail($id)->delete();

           $notification = array(
            'message' => 'Patient Deleted Successfully',
            'alert-type' => 'success'
        );


        return redirect()->route('all.patient')->with($notification);
    }
}
