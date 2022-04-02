<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class taskcontroller extends Controller
{
    public function viewindex()
    {
        //for sending all the todo task in index page
        $get_all_task = Task::all()->sortBy('id');
        
        return view('index',['get_all_task'=>$get_all_task]);
    }

    public function postaddtodo(Request $req)
    {
        //for adding the todo
        $task = new Task();
        $task->name = $req->name;
        $task->save();
        return redirect()->back();
    }

    public function postdeletetodo(Request $req)
    {
        //deleting todo
        // $this->deletetodoinarray($req->name);//deleting todo in array
        Task::where('id',$req->id)->delete();
        return redirect()->back();
    }

    public function postmarkfinishtodo(Request $req)
    {
        //for marking todo as finish
        Task::where('id',$req->id)->update(['status'=>'Finised']);
        return redirect()->back();
    }

   
    
}
