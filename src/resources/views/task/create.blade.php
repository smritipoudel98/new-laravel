@extends('layout.app')
@section('content')
<h1>Task Creation:</h1>
<form method="post" action="/task">
<div class="form-group">
    @csrf
<label for="description">Task Description</label>
<input class="form-control" name="description" />
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Create Task</button>
</div>
</form>
@endsection