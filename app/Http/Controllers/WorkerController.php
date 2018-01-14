<?php

namespace App\Http\Controllers;

use App\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Worker::all());
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
        Worker::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Worker $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        return response()->json($worker);
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
     * @param  Worker $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        return response()->json($worker->update($request->all())->save());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Worker $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        return $worker->delete();
    }
}
