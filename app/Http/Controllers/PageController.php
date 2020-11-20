<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function mainPage(Request $request)
    {
        if ($request->user()->status == 1) {

            return view('pages.teacher.main');
        } else {

            return view('pages.student.main');
        }
    }

    public function addTask()
    {
        return view('pages.teacher.add-task');
    }

    public function taskControl()
    {
        $allTasks = DB::table('tasks')->get();

        return view('pages.teacher.task-control')->with('allTasks', $allTasks);
    }

    public function editTask($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();

        return view('pages.teacher.edit-task')->with('task', $task);
    }

    public function myTasks(Request $request)
    {
        $myTasks = DB::table('tasks')->where('assign_to', $request->user()->firstname . " " . $request->user()->lastname)->get();

        return view('pages.student.my-tasks')->with('myTasks', $myTasks);
    }
}
