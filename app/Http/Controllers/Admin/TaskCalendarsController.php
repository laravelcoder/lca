<?php
namespace App\Http\Controllers\Admin;

use App\Task;
use App\Http\Controllers\Controller;

class TaskCalendarsController extends Controller
{
    public function index()
    {
        $events = Task::whereNotNull('due_date')->get();
        return view('admin.task_calendars.index', compact('events'));
    }
}
