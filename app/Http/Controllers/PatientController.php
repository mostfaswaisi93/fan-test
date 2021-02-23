<?php

namespace App\Http\Controllers;

use  App\Patient;
use App\Payment;
use  Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use PhpParser\ParserAbstract;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




        $patient = Patient::all();

        //        $doctor = Doctor::all();

        return view('admin.patient.indexPatient', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.createPatient');
    }

    public function store(Request $request)
    {

        $patient = Patient::create($request->all());

        $patient->save();
        return redirect('/patient')->with('success', 'The Patient has been added');
    }

    public function show($id)
    {
        $patient = Patient::find($id);

        return view('admin.patient.showPatient', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::find($id);

        return view('admin.patient.editPatient', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name = $request->get('name');
        $patient->aderss = $request->get('aderss');
        $patient->email = $request->get('email');
        $patient->phone = $request->get('phone');
        $patient->gender = $request->get('gender');
        $patient->DOB = $request->get('DOB');

        $patient->save();
        return redirect('/patient')->with('success', 'The Patient has been Update');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect('/patient')->with('success', 'The Patient has been Remove');
    }

    public function getPatient(Request $request)
    {
        if ($request->ajax()) {
            $patient = Patient::all();

            return datatables()->of($patient)
                ->addColumn('action', function ($row) {
                    return '<a href="' . route('patient.edit', $row->id) . '" class="btn btn-primary btn-xs fa fa-pencil"></a> 
                            <a href="' . route('patient.destroy', $row->id) . '" class="btn btn-danger btn-xs fa fa-trash-o"></a>
                            <a href="' . route('patient.show', $row->id) . '" class="btn btn-dark btn-xs fa fa-eye"></a>';
                })
                ->toJson();
        }
    }
}
