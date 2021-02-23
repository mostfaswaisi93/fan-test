<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Appointment;
use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = Appointment::with('doctors', 'patients')->get();

        $appointment = Appointment::all()->count();
        //        dd($appointment);
        return view('admin.appointment.indexAppointment', compact('appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();


        return view('admin.appointment.createAppointment', compact('patients', 'doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->all());

        $appointment->save();
        return redirect('/appointment')->with('success', 'The Appointment has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patients = Patient::all();
        $doctor = Doctor::all();

        $appointment = Appointment::find($id);
        return view('admin.appointment.editAppointment', compact('appointment', 'patients', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $appointment = Appointment::find($id);
        $appointment->gender = $request->get('gender');
        $appointment->date_Of_Appointment = $request->get('date_Of_Appointment');
        $appointment->time = $request->get('time');
        $appointment->details = $request->get('details');
        $appointment->save();
        return redirect('/appointment')->with('success', 'The Appointment Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect('/appointment')->with('success', 'The Appointment Has Been Remove');
    }

    public function schedule()
    {
        return view('admin.appointment.appointDoctor');
    }
}
