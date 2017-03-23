<?php

namespace App\Http\Controllers;

use App\Task;
use App\Repositories\TaskRepository;
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
     * Destroy the given task.
     *
     * @param Request $request
     * @param Task $task 
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {

        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}
