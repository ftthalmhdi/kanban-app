@extends('layouts.master')

@section('pageTitle', $pageTitle)


@section('main')
    <div class="task-list-container">

        <h1 class="task-list-heading">Task List</h1>

        <div class="task-list-table-head">
            <div class="task-list-header-task-name">Task Name</div>
            <div class="task-list-header-detail">Detail</div>
            <div class="task-list-header-due-date">Due Date</div>
            <div class="task-list-header-progress">Progress</div>
        </div>

        @foreach ($tasks as $index => $task)
            <div class="table-body">
                <div class="table-body-task-name">
                    <span
                        class="material-icons @if ($task->status == 'completed') check-icon-completed @else check-icon @endif">
                        check_circle
                    </span>
                    {{ $task->name }}
                </div>
                <div class="table-body-detail"> {{ $task->detail }} </div>
                <div class="table-body-due-date"> {{ $task->due_date }} </div>
                <div class="table-body-progress">
                    @switch($task->status)
                        @case('in_progress')
                            In Progress
                        @break

                        @case('in_review')
                            Waiting/In Review
                        @break

                        @case('completed')
                            Completed
                        @break

                        @default
                            Not Started
                    @endswitch
                </div>
                <div>

                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>

                </div>
            </div>
        @endforeach
    @endsection
