<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use App\Models\Branch;
use App\Models\MembershipPlan;
use Illuminate\Http\Request;
use App\Utilities\Helper;
use Hash;
use Str;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::with(['user','branch'])->latest()->paginate(20);
        return view('tenant.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::get();
        $membershipPlans = MembershipPlan::get();
        return view('tenant.members.create', compact('branches','membershipPlans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $membershipPlan = MembershipPlan::find($request->membership_plan_id);

        $user = new User;
        $user->username = '+255'.$request->phone;
        $user->password = Hash::make($request->last_name);
        $user->save();

        $number = '0001';
        $lastMember = Member::orderBy('id', 'desc')->first(['number']);
        if($lastMember)
        {
             $numberInteger = (int)$lastMember->number + 1;
             $number = Str::padLeft($numberInteger, 4, '0'); 
        }        

         $member = new Member;
         $member->number = $number;
         $member->branch_id = $request->branch_id;
         $member->user_id = $user->id;
         $member->first_name = $request->first_name;
         $member->middle_name = $request->middle_name;
         $member->last_name = $request->last_name;
         $member->gender = $request->gender;
         $member->date_of_birth = $request->date_of_birth;
         $member->joining_date = $request->joining_date;
         $member->phone = '+255'.$request->phone;
         $member->email = $request->email;
         $member->address = $request->address;
         $member->save();

         $member->plans()->attach($membershipPlan);

         $request->session()->flash('successMessage', 'Success');

         return redirect('admin/members');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show($hashid)
    {
        $member = Member::with(['user', 'plans'])->find(Helper::decode($hashid));
        return view('tenant.members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($hashid)
    {
        $member = Member::find(Helper::decode($hashid));
        $branches = Branch::get();
        return view('tenant.members.edit', compact('member','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hashid)
    {
       $member = Member::find(Helper::decode($hashid));

       $member->branch_id = $request->branch_id;
       $member->first_name = $request->first_name;
       $member->middle_name = $request->middle_name;
       $member->last_name = $request->last_name;
       $member->gender = $request->gender;
       $member->date_of_birth = $request->date_of_birth;
       $member->joining_date = $request->joining_date;
       $member->phone = '+255'.$request->phone;
       $member->email = $request->email;
       $member->address = $request->address;
       $member->save();

       $request->session()->flash('successMessage', 'Success');

       return redirect('admin/members');
   }

}
