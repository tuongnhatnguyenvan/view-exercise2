<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
        /* Custom styles */
        .container-border {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-top: 20px;
        }
        .task-label {
            font-weight: bold;
        }
        .delete-button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Task List</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>      
    </div>
    <div class="container container-border">
        <div class="alert alert-secondary">
            <h4>New Task</h4>
        </div>
        <form action="/task" method="POST" class="row">
            <div class="col-md">
                <label for="task-name" class="form-label task-label">Task</label>
                <input type="text" name="name" id="task-name" class="form-control">
            </div>
       </form>
       <div class="col-md-6">
        <button type="submit" class="btn btn-outline-primary mt-3"><i class="fa fa-plus"></i> Add Task</button>
    </div>
    </div>
    <div class="container container-border">
        
        <div class="alert alert-secondary">
            <h4>Current Tasks</h4>
        </div>
        <label for="task-name" class="form-label task-label">Task</label>
        <hr>
        <form action="/task" method="POST" class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md">
                        <label for="first-task" class="form-label task-label">First Task</label>
                    </div>
                    <div class="col-md">
                        <button type="submit" class="btn btn-danger delete-button"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <div class="row">
                    <div class="col-md">
                        <label for="second-task" class="form-label task-label">Second Task</label>
                    </div>
                    <div class="col-md">
                        <button type="submit" class="btn btn-danger delete-button"><i class="fa fa-trash"></i> Delete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
