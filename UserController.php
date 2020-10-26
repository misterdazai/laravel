<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = users::all();
        return ($user->toJson());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '{"status" : "create"}';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $params = $req->json()->all();
        $user = new users();
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name;
        $user->email=$req->email;
        $user->password=md5($req->password);
        $user->save();
        return $user->toJson();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = users::find($id);
        return ($user->toJson());
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return '{"status" : "edit"}';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $user = users::find($id);
        if ($req->first_name == null){
            $user->first_name = $user->first_name;
        }else{
            $user->first_name = $req->first_name;
        }

        if ($req->last_name == null){
            $user->last_name = $user->last_name;
        }else{
            $user->last_name = $req->last_name;
        }

        if ($req->email == null){
            $user->email = $user->email;
        }else{
            $user->email = $req->email;;
        }

        if (md5($req->password) == null){
            $user->password = $user->password;
        }else{
            $user->password = md5($req->password);
        }
        $user->save();
        $user = users::all();
        return $user->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = users::destroy($id);
        $user = users::all();
        return ($user->toJson());
    }
}
