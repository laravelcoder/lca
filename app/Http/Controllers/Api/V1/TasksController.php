<?php

namespace App\Http\Controllers\Api\V1;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTasksRequest;
use App\Http\Requests\Admin\UpdateTasksRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class TasksController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Task::all();
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function update(UpdateTasksRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        

        return $task;
    }

    public function store(StoreTasksRequest $request)
    {
        $request = $this->saveFiles($request);
        $task = Task::create($request->all());
        

        return $task;
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return '';
    }
}
