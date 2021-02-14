<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use App\Patient;
use App\Payment;
use App\Pays;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment =Payment::with('doctors','patients')->get();
        return view('admin.payment.indexPayment',compact('payment'));

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
        return view('admin.payment.createPayment',compact('allpatient','alldoctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request['remaining_Amount'] = $request['total_Amount']-$request['first_Amount'];
        $payment= Payment::create($request->all());
        $payment->save();
        $request['pay'] = $request['first_Amount'];
        Pays::create($request->all());
        return redirect('/payment')->with('success', 'The Payment has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payment =Payment::find($id);
        return view('admin.payment.ShowPayment',compact('payment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $payment = Payment::find($id);
        return view('admin.payment.editPayment', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $payment = Payment::find($id);
        $old = $payment->first_Amount;
        $payment->first_Amount = $request->get('first_Amount') + $old;
        $payment->remaining_Amount= ($payment->total_Amount - $payment->first_Amount);
        $payment->save();
        return redirect('/payment')->with('success', 'The Payment Has Been add');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect('/payment')->with('success', 'The Payment has been Remove');
    }

//    protected function addPayment(Request $request,$id)
//    {
//        $payment = Payment::find($id);
//        $old = $payment->first_Amount;
//        $payment->first_Amount = $request->get('first_Amount') + $old;
//        $payment->remaining_Amount= ($payment->total_Amount - $payment->first_Amount);
//        $payment->save();
//        return redirect('/payment')->with('success', 'The Payment Has Been Update');
//    }


}
