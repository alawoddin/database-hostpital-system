<?php

namespace App\Http\Controllers;

use App\Models\OPD;
use Illuminate\Http\Request;

class OPDController extends Controller
{
    Public function AllOPD(){
        $opds = OPD::latest()->get();
        return view('admin.opd.all_opd', compact('opds'));
    }

    public function AddOPD(){
        return view('admin.opd.add_opd');
    }

    public function StoreOPD(Request $request){
        OPD::create([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'OPD Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.opd')->with($notification);
    }

    public function EditOPD($id){
        $opd = OPD::findOrFail($id);
        return view('admin.opd.edit_opd', compact('opd'));
    }

    public function UpdateOPD(Request $request){
        $opd_id = $request->id;

        OPD::findOrFail($opd_id)->update([
            'price' => $request->price,
        ]);

         $notification = array(
            'message' => 'Opd Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.opd')->with($notification);
    }

    public function DeleteOPD($id){
        OPD::findOrFail($id)->delete();

        $notification = array(
            'message' => 'OPD Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.opd')->with($notification);
    }
}
