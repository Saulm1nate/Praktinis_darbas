<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function storeTask(Request $request)
    {
        $request->validate([
            'assign_to' => 'required',
            'task' => 'required',
            'due' => 'required',
            'desc' => 'required'
        ]);

        $taskData = new Task([
            'assign_to' => $request->post('assign_to'),
            'task' => $request->post('task'),
            'due' => $request->post('due'),
            'desc' => $request->post('desc'),
        ]);

        $taskData->save();

        return redirect('uzduociu-valdymas');
    }

    public function destroyTask($id)
    {
        DB::table('tasks')->where('id', $id)->delete();

        return redirect()->back();
    }

    public function updateTask(Request $request, $id)
    {
        $request->validate([
            'assign_to' => 'required',
            'task' => 'required',
            'due' => 'required',
            'desc' => 'required'
        ]);

        DB::table('tasks')->where('id', $id)->update([
            'assign_to' => $request->post('assign_to'),
            'task' => $request->post('task'),
            'due' => $request->post('due'),
            'desc' => $request->post('desc'),
        ]);

        return redirect('uzduociu-valdymas');
    }

    public function completeTask($id)
    {
        DB::table('tasks')->where('id', $id)->update([
            'status' => 'Atlikta'
        ]);

        return redirect()->back();
    }
}
