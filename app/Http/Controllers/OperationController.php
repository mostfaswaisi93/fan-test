<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $operation = Operation::with('doctors', 'patients')->get();

        return view('admin.operation.indexOperation', compact('operation'));
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

        return view('admin.operation.createOperation', compact('allpatient', 'alldoctor'));
        // return view('admin.operation.createOperation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operation = Operation::create($request->all());

        if ($request->hasFile('photo_teeth')) {
            $photo = $request->file('photo_teeth');
            $photo->store('operations');
            $operation->photo_teeth = 'operations/' . $photo->hashName();
        }
        $operation->save();
        return redirect('/operation')->with('success', 'The Operation has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function show(operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function edit(operation $operation, $id)
    {
        $operation = Operation::find($id);


        return view('admin.operation.editOperation', compact('operation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, operation $operation, $id)
    {
        $operation = Operation::find($id);
        //        $operation->name = $request->get('name');
        //        $operation->aderss = $request->get('aderss');
        $operation->photo_teeth = $request->get('photo_teeth');
        $operation->type_operate = $request->get('type_operate');
        $operation->date_of_operate = $request->get('date_of_operate');

        $operation->save();
        return redirect('/doctor')->with('success', 'The Doctor has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroy(operation $operation)
    {
        $operation->delete();
        return redirect('/operation')->with('success', 'The Operation has been Remove');
    }
}
