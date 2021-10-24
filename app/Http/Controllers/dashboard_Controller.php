<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Iu;
use App\Models\Inu;
use App\Models\Uni;
use App\Models\Ninu;





class dashboard_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $iu_Tasks = Iu::all()->toArray();
        $inu_Tasks = Inu::all()->toArray();
        $uni_Tasks = Uni::all()->toArray();
        $ninu_Tasks = Ninu::all()->toArray();

        return view('index')
        ->
        with([

            "iu_Tasks"  =>  $iu_Tasks,
            "inu_Tasks"  =>  $inu_Tasks,
            "uni_Tasks"  =>  $uni_Tasks,
            "ninu_Tasks"  =>  $ninu_Tasks,
        ]);
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
}
