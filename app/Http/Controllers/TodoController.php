<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\http\Response
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\http\Response
     */
    public function store(Request $request)
    {
        return Todo::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\http\Response
     */
    public function show(string $id)
    {
        $todo= Todo::find($id);
        return $todo;
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\http\Response
     */
    public function update(Request $request, string $id)
    {
       $todo = Todo::find($id);
       $todo->update($request->all());
       return $todo;
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\http\Response
     */
    public function destroy(string $id)
    {
        return Todo::destroy($id);
    }
}