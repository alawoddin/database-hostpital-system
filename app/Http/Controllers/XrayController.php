<?php

namespace App\Http\Controllers;

use App\Models\Xray;
use Illuminate\Http\Request;

class XrayController extends Controller
{
    public function AllXray()
    {
        $alldata = Xray::all();
        return view('admin.xray.all_xray', compact('alldata'));
    }

    public function AddXray()
    {
        return view('admin.xray.add_xray');
    }

    public function StoreXray(Request $request)
    {
        Xray::create([
            'price' => $request->price,
        ]);

          $notification = array(
            'message' => 'Ward Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.xray')->with($notification);

    }

    public function EditXray($id)
    {
        $xray = Xray::findOrFail($id);
        return view('admin.xray.edit_xray', compact('xray'));
    }

    public function UpdateXray(Request $request)
    {
        $xray_id = $request->id;

        Xray::findOrFail($xray_id)->update([
            'price' => $request->price,
        ]);

          $notification = array(
            'message' => 'Xray Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.xray')->with($notification);

    }

    public function DeleteXray($id)
    {
        Xray::findOrFail($id)->delete();

          $notification = array(
            'message' => 'Xray Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.xray')->with($notification);
    }
}
