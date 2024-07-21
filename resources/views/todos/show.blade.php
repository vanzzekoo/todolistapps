<!DOCTYPE html>
<html>
<head>
    <title>Todo Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Todo Details</h1>
        <div class="card">
            <div class="card-header">
                <h3>{{ $todo->title }}</h3>
            </div>
            <div class="card-body">
                <p>{{ $todo->description }}</p>
                <p><strong>Status:</strong> {{ $todo->completed ? 'Completed' : 'Not Completed' }}</p>
                <a href="{{ route('todos.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>
