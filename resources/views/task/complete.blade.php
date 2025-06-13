<thead>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Status</th>
        <th>Actions</th>
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
                @if($task->completed)
                    <span style="color: green;">Completed</span>
                @else
                    <span style="color: red;">Pending</span>
                @endif
            </td>
            <td>
                @if(!$task->completed)
                    <a href="{{ route('task.index', $task->id) }}" class="btn btn-success btn-sm">Mark Complete</a>
                @endif
            </td>
        </tr>
    @endforeach
</tbody>
