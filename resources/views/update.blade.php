@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg">
        <form action="{{ route('todo.save', ['id' => $todo->id]) }}" method="post">
            {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a New Todo">
        </form>
        </div>
    </div>
    <hr>
@stop
