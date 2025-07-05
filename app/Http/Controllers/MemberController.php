<?php

namespace App\Http\Controllers;

use App\Mail\MemberActivated;
use App\Mail\MemberRegistered;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Models\Member;
use App\Models\Official;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    public function indexMember(){
        return view('pages.members', [
            'members' => Member::all(),
        ]);
    }

    public function createMember(){
        return view('pages.register');
    }
    
    public function storeMembers(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:members,email',
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'phone' => 'nullable|digits_between:7,15',
            'dob' => 'nullable|string',
            'marital' => 'nullable|string',
            'nationality' => 'nullable|string',
            'pob' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'profession' => 'nullable|string',
            'business' => 'nullable|string',
            'from_aia' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'interest' => 'nullable|string',
            'convicted' => 'nullable|string',
            'medical' => 'nullable|string',
            'character' => 'nullable|string',
            'confidentiality' => 'nullable|string',
            'liability' => 'nullable|string',
            'declaration' => 'nullable|string',
        ]);
    
        try {
            $lastMember = Member::latest()->first();
            $lastId = $lastMember ? intval(substr($lastMember->member_id, 4)) : 0;
            $newMemberId = 'AIA-' . str_pad($lastId + 1, 4, '0', STR_PAD_LEFT);
    
            if (!empty($validated['dob'])) {
                $validated['dob'] = \Carbon\Carbon::parse($validated['dob'])->format('Y-m-d');
            }
    
            $validated['member_id'] = $newMemberId;
            $validated['status'] = 'Pending';
    
            $member = Member::create($validated);
    
            Mail::to($member->email)->send(new MemberRegistered($member));
    
            return response()->json([
                'status' => true,
                'message' => 'Member created successfully.',
                'member_id' => $member->member_id,
                'data' => $member
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while creating member.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    public function showMember($id){
        $officials = Official::all();
        $member = Member::findOrfail($id);
        return view('pages.activate', compact('member'), ['officials' => $officials]);
    }
    

    public function updateMember(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $validated = $request->validate([
            'email' => 'required|email|unique:members,email,' . $member->id,
            'firstname' => 'nullable|string',
            'lastname' => 'nullable|string',
            'phone' => 'nullable|digits_between:7,15',
            'dob' => 'nullable|string',
            'marital' => 'nullable|string',
            'nationality' => 'nullable|string',
            'pob' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'address' => 'nullable|string',
            'profession' => 'nullable|string',
            'business' => 'nullable|string',
            'from_aia' => 'nullable|string',
            'hobbies' => 'nullable|string',
            'interest' => 'nullable|string',
            'convicted' => 'nullable|string',
            'medical' => 'nullable|string',
            'character' => 'nullable|string',
            'confidentiality' => 'nullable|string',
            'liability' => 'nullable|string',
            'declaration' => 'nullable|string',
            'status' => 'nullable|string',
            'official_name' => 'nullable|string',
            'date_approved' => 'nullable|string',
        ]);

        // Update the member
        $member->update($validated);

        if ($member->status === 'Approved') {
            Mail::to($member->email)->send(new MemberActivated($member));
        }

        return back()->with('success', 'Member updated and email sent (if activated).');
    }


    public function destroyMember($id){
        $member = Member::findOrfail($id);

        $member->delete();

        return response()->json([
            'status' => true,
            'message' => 'Member Deleted Successfully',
            'data'  => $member
        ]);

    }

   

}
