<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\Room;

class CalendarController extends Controller
{
    //
    public function create(Request $request) 
    {
    	// dd($request);
    	$location = new Rent();

    	$datetime_start = str_replace("/", "-", $request->input('from'));
    	$datetime_start .= " 09:00:00";

    	$datetime_end = str_replace("/", "-", $request->input('to'));
    	$datetime_end .= " 09:00:00";

    	$location->StartDate = $datetime_start;
    	$location->EndDate = $datetime_end;
    	$location->cost = '200'; // not dynamic to be changed !
    	$location->billed = false; //idem 

    	$location->save();

    	//create event here

    	return redirect()->route('events');
    }
}
