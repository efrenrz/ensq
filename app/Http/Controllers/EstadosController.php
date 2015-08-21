<?php

namespace ensq\Http\Controllers;

use Illuminate\Http\Request;

use ensq\Http\Requests;
use ensq\Http\Controllers\Controller;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function estados()
    {
        $estados = \ensq\Models\Estados::get(['id','nombre' ]);

        return response()->json([

            "estados" => $estados->toArray()
        ],200
        );
    }

    public function stateId($curp){
        $estados = \ensq\Models\Estados::where('curp',$curp)
            ->get(['id','nombre']);

        return response()->json([

            "estados" => $estados->toArray()
        ],200
        );
    }

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
        //
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
