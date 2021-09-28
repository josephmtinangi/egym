<?php

namespace App\Http\Controllers\Tenant\Settings;

use App\Http\Controllers\Controller;
use App\Models\MembershipPlan;
use Illuminate\Http\Request;
use App\Utilities\Helper;
use Hash;
use Str;

class MembershipPlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membershipPlans = MembershipPlan::latest()->paginate(20);
        return view('tenant.settings.membership-plans.index', compact('membershipPlans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.settings.membership-plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $number = '0001';
        $lastMembershipPlan = MembershipPlan::orderBy('id', 'desc')->first(['number']);
        if($lastMembershipPlan)
        {
           $numberInteger = (int)$lastMembershipPlan->number + 1;
           $number = Str::padLeft($numberInteger, 4, '0'); 
        }  

        $membershipPlan = new MembershipPlan;
        $membershipPlan->number = $number;
        $membershipPlan->name = $request->name;
        $membershipPlan->number_of_days = $request->number_of_days;
        $membershipPlan->signup_fee = $request->signup_fee;
        $membershipPlan->fee = $request->fee;
        $membershipPlan->status = $request->status;
        $membershipPlan->save();

        $request->session()->flash('successMessage', 'Success');

        return redirect('admin/settings/membership-plans');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function show($hashid)
    {
        $membershipPlan = MembershipPlan::find(Helper::decode($hashid));
        return view('tenant.settings.membership-plans.show', compact('membershipPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function edit($hashid)
    {
         $membershipPlan = MembershipPlan::find(Helper::decode($hashid));
         return view('tenant.settings.membership-plans.edit', compact('membershipPlan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hashid)
    {
        $membershipPlan = MembershipPlan::find(Helper::decode($hashid));

        $membershipPlan->name = $request->name;
        $membershipPlan->number_of_days = $request->number_of_days;
        $membershipPlan->signup_fee = $request->signup_fee;
        $membershipPlan->fee = $request->fee;
        $membershipPlan->status = $request->status;
        $membershipPlan->save();

        $request->session()->flash('successMessage', 'Success');

        return redirect('admin/settings/membership-plans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipPlan $membershipPlan)
    {
        //
    }
}
