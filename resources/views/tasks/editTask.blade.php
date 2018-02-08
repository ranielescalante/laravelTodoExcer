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
    Edit Task
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
            <input type="text" name="edit" value="{{$editTask->name}}">
            <input type="submit" name="submit" value="submit" class="btn btn-primary">
        </form>
    </div>
</div>

@endsection