<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $members = DB::table('members as m')->leftJoin('organizations as o', 'm.workplace', 'o.id')->select('m.*', 'o.name as workplace_name')->get();
        return view('members.memberList', compact('members'));
    }

    public function create(){
        return view('register.createUser');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'register_number' => 'required|unique:members,register_number|max:10',
            'lastname' => 'required|string|max:50',
            'firstname' => 'required|string|max:50',
            'workplace' => 'nullable|string',
            'position' => 'nullable|string',
            'email' => 'required|email|unique:members,email',
            'phone' => 'required|string',
        ]);

        // Мэдээлэл хадгалах (жишээ нь members хүснэгтэд)
        Member::create($validated);

        return redirect('/')->with('toast', ['type' => 'success', 'message' => 'Амжилттай хадгаллаа']);
    }
}
