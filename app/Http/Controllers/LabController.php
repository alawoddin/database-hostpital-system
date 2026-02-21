<?php

namespace App\Http\Controllers;

use App\Models\LAB;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function AllLAB()
    {
        $labs = LAB::latest()->get();
        return view('admin.lab.all_lab', compact('labs'));
    }

    public function AddLAB()
    {
        return view('admin.lab.add_lab');
    }

    public function StoreLAB(Request $request)
    {
         LAB::create([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'LAB Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.lab')->with($notification);
    }

    public function EditLAB($id)
    {
        $lab = LAB::findOrFail($id);
        return view('admin.lab.edit_lab', compact('lab'));
    }

    public function UpdateLAB(Request $request)
    {
        $lab_id = $request->id;

        LAB::findOrFail($lab_id)->update([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'LAB Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.lab')->with($notification);
    }

    public function DeleteLAB($id)
    {
        LAB::findOrFail($id)->delete();

        $notification = array(
            'message' => 'LAB Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.lab')->with($notification);
    }
}
