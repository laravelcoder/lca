<?php

namespace App\Http\Controllers\Admin;

use App\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTaskStatusesRequest;
use App\Http\Requests\Admin\UpdateTaskStatusesRequest;

class TaskStatusesController extends Controller
{
    /**
     * Display a listing of TaskStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('task_status_access')) {
            return abort(401);
        }


                $task_statuses = TaskStatus::all();

        return view('admin.task_statuses.index', compact('task_statuses'));
    }

    /**
     * Show the form for creating new TaskStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('task_status_create')) {
            return abort(401);
        }
        return view('admin.task_statuses.create');
    }

    /**
     * Store a newly created TaskStatus in storage.
     *
     * @param  \App\Http\Requests\StoreTaskStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskStatusesRequest $request)
    {
        if (! Gate::allows('task_status_create')) {
            return abort(401);
        }
        $task_status = TaskStatus::create($request->all());



        return redirect()->route('admin.task_statuses.index');
    }


    /**
     * Show the form for editing TaskStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('task_status_edit')) {
            return abort(401);
        }
        $task_status = TaskStatus::findOrFail($id);

        return view('admin.task_statuses.edit', compact('task_status'));
    }

    /**
     * Update TaskStatus in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskStatusesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskStatusesRequest $request, $id)
    {
        if (! Gate::allows('task_status_edit')) {
            return abort(401);
        }
        $task_status = TaskStatus::findOrFail($id);
        $task_status->update($request->all());



        return redirect()->route('admin.task_statuses.index');
    }


    /**
     * Display TaskStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('task_status_view')) {
            return abort(401);
        }
        $tasks = \App\Task::where('status_id', $id)->get();

        $task_status = TaskStatus::findOrFail($id);

        return view('admin.task_statuses.show', compact('task_status', 'tasks'));
    }


    /**
     * Remove TaskStatus from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('task_status_delete')) {
            return abort(401);
        }
        $task_status = TaskStatus::findOrFail($id);
        $task_status->delete();

        return redirect()->route('admin.task_statuses.index');
    }

    /**
     * Delete all selected TaskStatus at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('task_status_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = TaskStatus::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
