<?php

namespace App\Http\Controllers;

use App\Models\EEG;
use Illuminate\Http\Request;

class EEGController extends Controller
{
    public function AllEEG()
    {
        $eegs = EEG::all();
        return view('admin.eeg.all_eeg', compact('eegs'));
    }

    public function AddEEG()
    {
        return view('admin.eeg.add_eeg');
    }

    public function StoreEEG(Request $request)
    {
        EEG::create([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'EEG Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.eeg')->with($notification);
    }

    public function EditEEG($id)
    {
        $eeg = EEG::findOrFail($id);
        return view('admin.eeg.edit_eeg', compact('eeg'));
    }

    public function UpdateEEG(Request $request)
    {
        $eeg_id = $request->id;

        EEG::findOrFail($eeg_id)->update([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'EEG Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.eeg')->with($notification);
    }

    public function DeleteEEG($id)
    {
        EEG::findOrFail($id)->delete();

        $notification = array(
            'message' => 'EEG Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.eeg')->with($notification);
    }


}
