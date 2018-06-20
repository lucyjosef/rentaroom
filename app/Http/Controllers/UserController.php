<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get All users
        $UserList = UserModel::all();

        // load the view and pass the $UserList
        return view('users.index')->with('UserList',$UserList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // Get All users
        $UserList = UserModel::find($id);

        return view('users.edit')->with('UserList',$UserList);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function delete($id)
    {
        // Remove user from id
        UserModel::destroy($id);

        // Get All users
        $UserList = UserModel::all();

        // load the view and pass the $UserList
        return view('users.index')->with('UserList',$UserList);
    }

    public function maj($id,$name,$email,$pwd)
    {
        dd($name);
        // Get All users
        $UserList = UserModel::all();

        // load the view and pass the $UserList
        return view('users.index')->with('UserList',$UserList);
    }
}
