<?php

namespace App\Http\Controllers\Admin;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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

    /**
     * Display a listing of Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('task_access')) {
            return abort(401);
        }


                $tasks = Task::all();

        return view('admin.tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating new Task.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('task_create')) {
            return abort(401);
        }
        
        $statuses = \App\TaskStatus::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $tags = \App\TaskTag::get()->pluck('name', 'id');

        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.tasks.create', compact('statuses', 'tags', 'users'));
    }

    /**
     * Store a newly created Task in storage.
     *
     * @param  \App\Http\Requests\StoreTasksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTasksRequest $request)
    {
        if (! Gate::allows('task_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $task = Task::create($request->all());
        $task->tag()->sync(array_filter((array)$request->input('tag')));



        return redirect()->route('admin.tasks.index');
    }


    /**
     * Show the form for editing Task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('task_edit')) {
            return abort(401);
        }
        
        $statuses = \App\TaskStatus::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $tags = \App\TaskTag::get()->pluck('name', 'id');

        $users = \App\User::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $task = Task::findOrFail($id);

        return view('admin.tasks.edit', compact('task', 'statuses', 'tags', 'users'));
    }

    /**
     * Update Task in storage.
     *
     * @param  \App\Http\Requests\UpdateTasksRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTasksRequest $request, $id)
    {
        if (! Gate::allows('task_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        $task->tag()->sync(array_filter((array)$request->input('tag')));



        return redirect()->route('admin.tasks.index');
    }


    /**
     * Display Task.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('task_view')) {
            return abort(401);
        }
        $task = Task::findOrFail($id);

        return view('admin.tasks.show', compact('task'));
    }


    /**
     * Remove Task from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('task_delete')) {
            return abort(401);
        }
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('admin.tasks.index');
    }

    /**
     * Delete all selected Task at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('task_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Task::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
