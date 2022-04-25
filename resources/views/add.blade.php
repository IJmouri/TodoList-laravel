@extends('master.master')
@section('body')
<br/>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="text-center text-success" id="xyz">Add To Your Todo List</h4>
            </div>
            <div class="panel-body">
                <center>{{ Session::get('message')}}</center>
                <form action="{{ Route('new-item')}}" method="POST" class="form-horizontal"
                enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label col-md-3">Task_Name</label>
                        <div class="col-md-9">
                            <input type="text" name="Task_Name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Completion_Date</label>
                        <div class="col-md-9">
                            <input type="date" name="Completion_Date" class="form-control"/>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-3">
                            <input type="submit" name="btn" value="Add" class="btn btn-success btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection