 @extends('layout.app')
<style>
    
    table thead tr {
        border-bottom: 1px solid black;
    }

    table tbody tr {
        border-bottom: 1px solid black;
    }
</style>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<h1>Task list</h1>
<br/>
<table border="5" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($incompleteTasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>
                    @if(!$task->completed)
                        <a href="{{ route('task.complete', $task->id) }}" class="btn btn-success btn-sm">Mark Complete</a>
                    @else
                        <span class="text-muted">Completed</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>
    <br/>
    <h1>Completed Tasks</h1>
    <br/>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($completedTasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $task->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <br/>
    <a href="/task/create">
        <button type="button" class="btn btn-primary">New Task</button>
    </a>
    @endsection
