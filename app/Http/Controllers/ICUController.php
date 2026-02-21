<?php

namespace App\Http\Controllers;

use App\Models\ICU;
use Illuminate\Http\Request;

class ICUController extends Controller
{
    public function AllICU(){
        $icus = ICU::latest()->get();
        return view('admin.icu.all_icu', compact('icus'));
    }

    public function AddICU(){
        return view('admin.icu.add_icu');
    }

    public function StoreICU(Request $request){
        ICU::create([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'ICU Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.icu')->with($notification);
    }

    public function EditICU($id){
        $icu = ICU::findOrFail($id);
        return view('admin.icu.edit_icu', compact('icu'));
    }

    public function UpdateICU(Request $request){
        $icu_id = $request->id;

        ICU::findOrFail($icu_id)->update([
            'price' => $request->price,
        ]);

        $notification = array(
            'message' => 'ICU Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.icu')->with($notification);
    }

    public function DeleteICU($id){
        ICU::findOrFail($id)->delete();

        $notification = array(
            'message' => 'ICU Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.icu')->with($notification);
    }
}
