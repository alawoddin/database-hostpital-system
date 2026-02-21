<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function AllProcedure() {
        $procedure = Procedure::latest()->get();
        return view('admin.procedure.all_procedure', compact('procedure'));
    }
    public function AddProcedure() {
        return view('admin.procedure.add_procedure');
    }

    public function StoreProcedure(Request $request) {
        Procedure::create([
            'price' => $request->price,
        ]);
         $notification = array(
            'message' => 'Procedure Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.procedure')->with($notification);
    }

    public function EditProcedure($id) {
        $procedure = Procedure::findOrFail($id);
        return view('admin.procedure.edit_procedure', compact('procedure'));
    }

    public function UpdateProcedure(Request $request) {
        $procedure_id = $request->id;

        Procedure::findOrFail($procedure_id)->update([
            'price' => $request->price,
        ]);

         $notification = array(
            'message' => 'Opd Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.procedure')->with($notification);
    }

    public function DeleteProcedure($id) {
        Procedure::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Procedure Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.procedure')->with($notification);
    }
}
