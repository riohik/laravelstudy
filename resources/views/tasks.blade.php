@extends('layout')
@section('content')
<h1>Task List</h1>
<form action="/tasks" method="POST">
    {{ csrf_field() }}
    <input type="text" name="name" id="task-name">
</form>
<h2>Current Tasks</h2>
<table>
    <thead>
        <th>Tasks</th><th>&nbsp;</th>
    </thead>
    <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    {{ $task->name }}
                </td>
                <td>
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button>Delete Task</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection