@extends('admin.master')
@section('body')
<br/>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="text-center text-success" id="xyz">TODO LIST</h4>
            </div>
            <center>{{ Session::get('message')}}</center>
            <div class="panel-body">
                <table class="table table-bordered">
                     <tr class="bg-primary">
                        <th>Sl No </th>
                        <th>Task Name </th>
                        <th>Completion_Date</th>
                        <th>Task Completion Status</th>
                        <th> Action </th>
                     </tr>
                    @php($i=1)
                    @foreach($items as $item)
                     <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->Task_Name}}</td>
                        <td>{{$item->Completion_Date}}</td>
                        <td>{{$item->Completion_Status == 1 ? 'Done' : 'Undone'}}</td>
                        <td>
                            @if($item->Completion_Status == 1)
                            <a href = "{{route('undone-item',['id'=>$item->id])}}" class="btn btn-info btn-xs">
                                <span class="glyphicon glyphicon-arrow-up"> </span>
                            </a>
                            @else
                            <a href = "{{route('done-item',['id'=>$item->id])}}" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-arrow-down"> </span>
                            </a>
                            @endif

                             <a href = "{{route('edit-item',['id'=>$item->id])}}" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-edit"> </span>
                            </a>
                             <a href = "{{route('delete-item',['id'=>$item->id])}}" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-trash"> </span>
                            </a>
                        </td>
                     </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection