<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function AllWard(){
        $wards = Ward::latest()->get();
        return view('admin.ward.all_ward', compact('wards'));
    }

    public function AddWard(){
        return view('admin.ward.add_ward');
    }

    public function StoreWard(Request $request){
        Ward::create([
            'price' => $request->price,
        ]);

          $notification = array(
            'message' => 'Ward Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.ward')->with($notification);
    }

    public function EditWard($id){
        $ward = Ward::findOrFail($id);
        return view('admin.ward.edit_ward', compact('ward'));
    }

    public function UpdateWard(Request $request){
        $ward_id = $request->id;

        Ward::findOrFail($ward_id)->update([
            'price' => $request->price,
        ]);

          $notification = array(
            'message' => 'Ward Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.ward')->with($notification);
    }

    public function DeleteWard($id){
        Ward::findOrFail($id)->delete();

          $notification = array(
            'message' => 'Ward Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.ward')->with($notification);
    }
}
