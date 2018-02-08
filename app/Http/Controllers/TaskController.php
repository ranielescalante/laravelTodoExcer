<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    function show() {
   	$tasks = Task::all();
   	return view('tasks.task', compact('tasks'));
   }

   public function store(Request $request) {

   	$validator = $request->validate([
			'name' => 'required|max:255',
		]);

   Session::flash('status', 'Task was successful!');

   	$new_task = new Task();
   	$new_task->name = $request->name;
   	$new_task->save();

   	return redirect('/tasks');
   }

   function delete($id) {
   	Session::flash('delStatus', 'Deleted Successfully');

   	$deleteTask = Task::find($id);
   	$deleteTask->delete();

   	return redirect('/tasks');
   }

    function editTaskForm($id) {
   	$editTask = Task::find($id);
   	return view('tasks.editTask', compact('editTask'));
   }

   function update(Request $request, $id) {
   	$validator = $request->validate([
			'edit' => 'required|max:255',
		]);

   	$editTaskForm = Task::find($id);
   	$editTaskForm->name = $request->edit;
   	$editTaskForm->save();

   	return redirect('/tasks');
   }

}


