<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function indexOfficials(){
        $officials = Official::latest()->get();
        return view('pages.officials', ['officials' => $officials]);
    }

    public function storeOfficials(Request $request){
       
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'positions' => 'required|string|unique:officials,positions',
        ]);

        Official::create($validated);
        
        return back()->with('success', 'Official Created Successfully');
    }

    public function destroyOfficials($id)
{
    $official = Official::findOrFail($id);
    $official->delete();

    return back();
}

}
