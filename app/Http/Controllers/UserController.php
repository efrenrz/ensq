<?php

namespace ensq\Http\Controllers;

use Illuminate\Http\Request;

use ensq\Http\Requests;
use ensq\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $user = $request->user();
        if(!Hash::check($request->get('password'), $user->password))
        {

            return redirect()->back()->withErrors([
                'current_password' => 'The current password is not valid'
            ]);
        }
        $this->validate($request,[
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'new_password' => 'confirmed|different:password|min:6',
            'new_password_confirmation' => 'same:new_password'
        ]);

        $user->email = $request->email;
        if($request->new_password != null) {
            $user->password = bcrypt($request->get('new_password'));
        }

        $user->save();

        return redirect()->to(route('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
