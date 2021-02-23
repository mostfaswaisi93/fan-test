<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Payment;
use App\Pays;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    { }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pays = Pays::where('patient_id', $id)->get();
        return view('admin.pays.indexPays', compact('pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(Pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pays $pays)
    {
        //
    }


    protected function createPayment($id)
    {
        $payment = $id;
        return view('admin.pays.createPays', compact('payment'));
    }

    protected function storePayment(Request $request, $id)
    {
        $request['patient_id'] = $id;
        $payment = Payment::where('patient_id', $id)->first();
        if ($request->pay <= $payment->remaining_Amount) {
            Pays::create($request->all());
            $payment->first_Amount = $payment->first_Amount + $request['pay'];
            $payment->remaining_Amount = $payment->total_Amount - $payment->first_Amount;
            $payment->save();

            return redirect('payment')->with('success', 'The Payment has been Add');
        } else {
            return redirect('payment')->with('error', 'The Payment has been Error');
        }
    }
}
