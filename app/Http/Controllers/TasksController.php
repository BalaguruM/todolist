<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use App\Models\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function view() 
    {
        $tasks = Tasks::all();
		$taskList = compact('tasks');
		
        return view('tasks')->with('data', $taskList['tasks']);
    }
	
	public function postadd(Request $request) 
	{ 
		$tasks = new Tasks;
		$users = auth()->user();
		$tasks->title = $request->title;
		$tasks->user_id = $users->id;
		$tasks->description = $request->description; 
		$tasks->save();
		
		return redirect('/tasks');
	
	}
	
	public function postedit($id) 
	{  
		$tasks = Tasks::findOrFail($id);
		if($tasks){
		}
	}
	public function deletetask($id) 
	{  
		$tasks = Tasks::findOrFail($id);
		if($tasks){
		}
	}
}
