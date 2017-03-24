<?php

namespace App\Http\Controllers;

use App\Task;
use App\Repositories\TaskRepository;

use Alert;

use Illuminate\Http\Request;


class TaskController extends Controller
{


    /**
    * The task repsoitory instance
    *
    * @var TaskRepository
    */
    protected $tasks;

    /**
    * Create a new controller instance
    *
    * @param TaskRepository $tasks
    * @return void
    */
    public function __construct(TaskRepository $tasks) 
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
    * Display a listing of all of the user's task.
    *
    * @param Reuqest $request
    * @return Response
    */
    public function index(Request $request)
    {

        return view('tasks.list', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);

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
        
        // Validation
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'priority' => 'required|max:5',
        ]);

        // Create the Task
        $request->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority
        ]);

        notify()->flash("$request->title, successfully created", 'success', [
                'timer' => 4000,
            ]);

        return redirect('/tasks');

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
     * Update the specified task in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        $this->authorize('update', $task);

        // Validation
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'priority' => 'required|max:5',
        ]);

        // Update
        $task->update([
                'title' => $request->title,
                'description' => $request->description,
                'priority' => $request->priority,
                'completed' => $request->completed,
        ]);

        return redirect ('/tasks');
    }

    public function complete(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $this->validate($request, [
            'completed' => 'required',
        ]);

        $task->update([
            'completed' => $request->completed,
        ]);

         notify()->flash("$task->title, is now completed", 'success', [
            'timer' => 3000,
        ]);  
        
        return redirect('/tasks'); 

    }

    /**
     * Destroy the given task
     *
     * @param Request $request
     * @param Task $task 
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {

        $this->authorize('destroy', $task);

        $task->delete();

        notify()->flash("$task->title, is now deleted", 'success', [
                'timer' => 3000,
            ]);

        return redirect('/tasks');
    }
}
