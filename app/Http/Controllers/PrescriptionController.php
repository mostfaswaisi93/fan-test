<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Doctor;
use App\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescription = Prescription::with('doctors', 'patients')->get();

        return view('admin.prescription.indexPrescription', compact('prescription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        $doctor = Doctor::all();
        $allpatient = $patient->where('parent', 0);
        $alldoctor = $doctor->where('parent', 0);

        return view('admin.prescription.createPrescription', compact('allpatient', 'alldoctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prescription = Prescription::create($request->all());
        $prescription->save();
        return redirect('/prescription')->with('success', 'The Prescription has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prescription = Prescription::find($id);
        return view('admin.prescription.editPrescription', compact('prescription'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prescription = Prescription::find($id);
        //        $patient = Patient::all();
        //        $doctor = Doctor::all();
        //        $allpatient = $patient->where('parent', 0);
        //        $alldoctor = $doctor->where('parent', 0);

        //        $appointment->patient_id = $request->get('name');
        //        $appointment->doctor_id = $request->get('name');
        //        $appointment->name = $request->get('patient_id');
        //        $appointment->name = $request->get('doctor_id');
        $prescription->type_of_prescription = $request->get('type_of_prescription');
        $prescription->details = $request->get('details');
        $prescription->date_of_prescription = $request->get('date_of_prescription');
        $prescription->save();
        return redirect('/prescription')->with('success', 'The Prescription Has Been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        $prescription->delete();
        return redirect('/prescription')->with('success', 'The Prescription has been Remove');
    }
}
