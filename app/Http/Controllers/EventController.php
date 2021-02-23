<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;

class EventController extends Controller

{

    public function index()

    {

        $event = [];

        $events = Event::all();

        foreach ($events as $row) {
            //   $enddate =$row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id
            );
        }
        $calendar = \Calendar::addEvents($event);

        return view('mycalender', compact('calendar'));
        return view('admin.appointment.appointDoctor', compact('events', 'calendar'));
    }

    //    public function index()
    //    {
    //        $events = Event::all();
    //        $event=[];
    //        foreach ($events as $row)
    //        {
    ////   $enddate =$row->end_date."24:00:00";
    //            $event[]=\Calendar::event(
    //                $row->title,
    //                false,
    //                new \DateTime($row->start_date),
    //                new \DateTime($row->end_date),
    //                $row->id
    //            );
    //        }
    //        $calendar=\Calendar::addEvents($event);
    ////        return view('mycalender',compact('events','calendar'));
    //
    //        return view('admin.appointment.appointDoctor',compact('events','calendar'));

    public function display()
    {
        return view('addevent');
    }
    public  function  store(Request $request)
    {
        $events = new Event();
        $events->title = $request->input('title');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->save();
        return redirect('/events')->with('success', 'Events Added');
    }
}
