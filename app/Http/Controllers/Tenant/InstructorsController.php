<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use App\Utilities\Helper;
use Hash;
use Str;

class InstructorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors = Instructor::latest()->paginate(20);
        return view('tenant.instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenant.instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->username = '+255'.$request->phone;
        $user->password = Hash::make($request->last_name);
        $user->save();

        $number = '0001';
        $lastInstructor = Instructor::orderBy('id', 'desc')->first(['number']);
        if($lastInstructor)
        {
           $numberInteger = (int)$lastInstructor->number + 1;
           $number = Str::padLeft($numberInteger, 4, '0'); 
        }        

        $instructor = new Instructor;
        $instructor->number = $number;
        $instructor->user_id = $user->id;
        $instructor->first_name = $request->first_name;
        $instructor->middle_name = $request->middle_name;
        $instructor->last_name = $request->last_name;
        $instructor->phone = '+255'.$request->phone;
        $instructor->email = $request->email;
        $instructor->address = $request->address;
        $instructor->save();

        $request->session()->flash('successMessage', 'Success');

        return redirect('admin/instructors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
