<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->due_date = $request->inputDueDate;

        $file = $request->inputFile;
        if (!$request->hasFile('inputFile')){
            $task->img = $file;

        }else{
            $fileName = $request->inputFileName;
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $task->img = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);

        }
        $task->save();
        $message = "Tạo Task $request->inputTitle thành công!";
        Session::flash('create-success', $message);
        return redirect()->route('tasks.index', compact('message'));

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
        $task = Task::find($id);
       // dd($task);
        return view('tasks.edit', compact('task'));
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
        $task = Task::find($id);
        $task->fill($request->all());
//        $task->title = $request->title;
//        $task->content = $request->content;
//        $task->due_date = $request->due_date;


        $file = $request->inputFile;

        if (!$request->hasFile('inputFile')){
            $task->img = $file;

        }else{
            $fileName = $request->inputFileName;
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = "$fileName.$fileExtension";
            $task->img = $newFileName;
            $request->file('inputFile')->storeAs('public/images', $newFileName);

        }
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
