<!DOCTYPE html>
<html>
<head>
    <title>To-do lists</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/task">Smriti To-do lists</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('task.index') }}">All Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('task.create') }}">New Task</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>
<div class="container">
@yield('content')
</div>
</body>
</html>