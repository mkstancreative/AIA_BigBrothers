<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function indexOfficials(){
        $officials = Official::all();
        return view('pages.officials', ['officials' => $officials]);
    }

    public function storeOfficials(Request $request){
       
        $validated = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'positions' => 'required|string|unique:officials,positions',
        ]);

        $official = Official::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Official Create Successfully',
            'data' => $official
        ]);

    }

    public function destroyOfficials($id)
{
    $official = Official::findOrFail($id);
    $official->delete();

    return response()->json([
        'status' => true,
        'message' => 'Official deleted successfully'
    ]);
}

}
