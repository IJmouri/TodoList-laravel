<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">

        <div class="header">
            <h2 class="title">2do App</h2>
        </div>
        <div class="sidebar">
            <ul class="sidebarlist">
                <li> <a href="">Add Task</a></li>
                <li>Todo Lists</li>
                <li>History</li>
            </ul>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <h3>Add</h3>
            </div>
            <div class="panel-body">
                <form action="{{ Route('new-item')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-md-3">Task Name</label>
                        <div class="col-md-9">
                            <input type="text" name="Task_Name" class="form-control" />

                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion Date</label>
                        <div class="col-md-9">
                            <input type="date" name="Task_Name" class="form-control" />

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" name="btn" value="Add" class="btn btn-success btn-block" />

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>