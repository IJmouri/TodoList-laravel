@extends('master.master')
@section('body')
<br/>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="text-center text-success" id="xyz">History List</h4>
            </div>
            <center>{{ Session::get('message')}}</center>
            <div class="panel-body">
            <form action="{{ route('clear-history') }}"method="GET" class="form-horizontal">
                <table class="table table-bordered">
                    <tr class="bg-primary">
                        <th>Sl No </th>
                        <th>Task Name </th>
                        <th>Completion_Date</th>
                    </tr>
                    @php($i=1)
                    @foreach($tasks as $item)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$item->Task_Name}}</td>
                        <td>{{$item->Completion_Date}}</td>
                    </tr>
                    @endforeach
                </table>
                <div class="col-md-2 col-md-offset-10">
                <input type="submit" name="btn" value="Clear History" class="btn btn-success btn-block"/>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection