@extends('admin.master')
@section('body')
<br/>
</!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<br/>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="text-center text-success" id="xyz">Update Your List</h4>
            </div>
            <div class="panel-body">
                {{ Session::get('message')}}
                <form action="{{ route('update-item') }}"method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Task_Name</label>
                        <div class="col-md-9">
                            <input type="text" name="Task_Name" value = "{{ $item -> Task_Name}}" class="form-control"/>
                            <input type="hidden" name="item_id" value = "{{ $item -> id}}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion_Date</label>
                        <div class="col-md-9">
                            <input type="date" name="Completion_Date" value = "{{ $item -> Completion_Date}}" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion_Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="Completion_Status" 
                                {{ $item->Completion_Status == 1 ? 'checked' : ''}} value="1"/> done</label>
                            <label><input type="radio" name="Completion_Status"
                             {{ $item->Completion_Status == 0 ? 'checked' : ''}} value="0"/> undone</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" value="update item Info" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>
@endsection