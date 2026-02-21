<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function AllConsultation()

    {
        $alldata = Consultation::latest()->get();
        return view('admin.consultation.all_consultation' , compact('alldata'));
    }

    public function AddConsultation()
    {
        return view('admin.consultation.add_consultation');
    }

    public function StoreConsultation(Request $request)
    {
        Consultation::create([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'Consultation Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.consultation')->with($notification);
    }

    public function EditConsultation($id)
    {
        $editdata = Consultation::findOrFail($id);
        return view('admin.consultation.edit_consultation', compact('editdata'));
    }

    public function UpdateConsultation(Request $request)
    {
        $consultation_id = $request->id;

        Consultation::findOrFail($consultation_id)->update([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'Consultation Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.consultation')->with($notification);
    }

    public function DeleteConsultation($id)
    {
        Consultation::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Consultation Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.consultation')->with($notification);
    }
}
