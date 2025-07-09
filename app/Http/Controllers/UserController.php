<?php

namespace App\Http\Controllers;

use App\Mail\MemberRegistered;
use App\Models\Blog;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        $Blog = Blog::latest()->take(3)->get();
       return view('pages.user.index', ['Blog' => $Blog]);
    }

    public function indexAbout(){
        return view('pages.user.about');
    }

    public function indexContact(){
        return view('pages.user.contact');
    }

    public function indexRegister(){
        return view('pages.user.register');
    }

    public function createRegister(){
        return view('pages.user.1.index');
    }
    
    public function storeRegister(Request $request)
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
    
}
