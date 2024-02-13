<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TaskController extends Controller
{
 

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Task::all();
        return view ('tasks.index')->with('tasks', $data);

       
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Task::find($id);
        return view('tasks.show')->with('tasks', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();
        Task::create($input);
        return redirect('tasks')->with('flash_message', 'Task Addedd!'); 
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Task::find($id);
        return view('tasks.edit')->with('tasks', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Task::findOrFail($id);
        $input = $request->all();
        $data->update($input);
        return redirect('tasks')->with('flash_message', 'Task Updated!'); 
    }    

     /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('tasks')->with('flash_message', 'Task deleted!');  
    }

}
