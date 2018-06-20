<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Illuminate\Http\Request;
use App\Room;
use App\User;


class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $user_id = Auth::id();
        $rooms = Room::all();
        $room_fk_id = Room::where('user_id', '=', $user_id)->orderBy('title', 'desc')->get();

        $room_table = [];

        foreach ($rooms as $room) {
            if(Room::find($room_fk_id)) {
                array_push($room_table, $room);
            }
        }

        return view('list-rooms', ['room_table' => $room_table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'city' => 'required',
        //     'title' => 'required',
        //     'places' => 'required',
        //     'fee' => 'required'
        // ]);
        
        $room = new Room();
        $room->title = $request->input('title');
        $room->city = $request->input('city');
        $room->adress = $request->input('adress');
        $room->nb_places = $request->input('nb_places');
        $room->fee = $request->input('fee');

        $room->save();
        
        return redirect()->route('rooms.show', [$room]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('room_detail', ['room' => Room::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit-room', ['room' => Room::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $room = Room::find($id);
        $room->title = $request->input('title');
        $room->city = $request->input('city');
        $room->nb_places = $request->input('nb_places');
        $room->fee = $request->input('fee');

        $room->save();

        return back()->with('message', 'Successfully updates !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        //Session::flash('message', 'Successfully deleted the post');
        return redirect()->route('home')->with('message', 'You\'ve successfully deleted your post');
    }
}
