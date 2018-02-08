@extends('app')
<style type="text/css">
    li{
        list-style: none;
    }

    .row{
        margin: 5px;
    }

    hr {
        width: 95%;
    }

    ul {
        margin-top: 15px!important;
    }

    div {
        font-family: 'Righteous', cursive;
    }

    button {
        width: 40%;
    }

    body {
        background-color: grey!important;
    }



</style>

@section('title')
    To Do List
@endsection


@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>New Task</h4> 
    </div>

    <div class="panel-body">
        <!-- New Task Form -->
        <form method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- Task Name -->
            @include ('tasks.error')

            @include ('tasks.success')
                  
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">  
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6" style="text-align: center;">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><h4>Current Task</h4></div>
        <table class="table">
            @if (session()->has('delStatus'))
                <ul class="alert alert-danger">
                    {{session()->get('delStatus')}}
                </ul>
            @endif  
            <ul>
            @foreach($tasks as $task)
                <div class="row">
                    <div class="col-sm-4">
                        <li>{{$task->name}} </li>
                    </div>
                    <div class="col-sm-4"><a href='{{url("tasks/$task->id/editTask")}}'><button class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button></a></div>
                    <div class="col-sm-4"><a href='{{url("tasks/$task->id")}}'><button class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button></a></div>
                </div><hr>
                
            @endforeach
            </ul>  
        </table>
    </div> 
</div>

@endsection