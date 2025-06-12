@extends('layout.app')
<style>
    
    table thead tr {
        border-bottom: 1px solid black;
    }

    table tbody tr {
        border-bottom: 1px solid black;
    }
</style>
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
        @foreach($tasks as $task)
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
    
     {{-- //display output in web page that comes from database.--}}
@endsection
