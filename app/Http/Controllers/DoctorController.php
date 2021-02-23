<?php

namespace App\Http\Controllers;

use App\Doctor;

use App\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();


        return view('admin.doctor.indexDoctor', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = User::all();
        $allUser = $user->where('parent', 0);

        return view('admin.doctor.createDoctor', compact('allUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $doctor = Doctor::create($request->all());

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photo->store('doctors');
            $doctor->photo = 'doctors/' . $photo->hashName();
        }
        $doctor->save();
        return redirect('/doctor')->with('success', 'The Doctor has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);


        return view('admin.doctor.editDoctor', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);
        $doctor->name = $request->get('name');
        $doctor->surname = $request->get('surname');
        $doctor->aderss = $request->get('aderss');
        $doctor->email = $request->get('email');
        $doctor->qualification = $request->get('qualification');
        $doctor->specialization = $request->get('specialization');
        $doctor->phone = $request->get('phone');
        $doctor->DOB = $request->get('DOB');

        $doctor->save();
        return redirect('/doctor')->with('success', 'The Doctor has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect('/doctor')->with('success', 'The Doctor has been Remove');
    }
}
