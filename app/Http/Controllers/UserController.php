<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view("users.index",compact("users"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:users",
            "password"=> "required",
        ]);

        User::create([
            "name"=>$request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);

        return redirect()->route("users.index")->with("success","User Create successfully.");

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $user = User::find($id);
        return view("users.show",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      $user =  User::find($id);
      return view("users.edit",compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

         $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "password"=> "required",
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

              return redirect()->route("users.index")->with("success","User Updated successfully.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

       $user =  User::find($id);
       $user->delete();
          return redirect()->route("users.index")->with("success","User Deleted successfully.");

    }
}
