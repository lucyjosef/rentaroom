<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
use Illuminate\Support\Facades\View;
use Auth;

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
      // Get user from id
      $UserList = UserModel::find($id);

      return view('users.show')->with('UserList',$UserList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

        // load the view and pass the $UserList
        return view('welcome');
    }

    public function maj(request $request)
    {
        //dd($request);
        // Update users
        $UserToUpdate = UserModel::find($request['id']);
        $UserToUpdate->name = $request['name'];
        $UserToUpdate->email = $request['email'];
        $UserToUpdate->save();

        // load the view and pass the $UserList
        return view('home');
    }

    public function chgpwd(request $request)
    {
        // load the view and pass the $UserList
        $MsgError = ['false',""];
        return view('users.changepwd')->with('MsgError',$MsgError);
    }

    public function updpwd(request $request)
    {

      if ($request['password'] != $request['password_confirmation']){
        $MsgError = ['true',"The password confirmation does not match."];
        return view('users.changepwd')->with('MsgError',$MsgError);
      } else {
        $PwdUpdate = UserModel::find($request['id']);
        $PwdUpdate->password = bcrypt($request['password']);
        $PwdUpdate->save();
        return view('home');
      }

    }

    public function signout()
    {
      Auth::logout();
      return view('welcome');
    }
}
