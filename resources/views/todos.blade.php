@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg">
        <form action="/create/todo" method="post">
            {{ csrf_field() }}
            <input type="text" class="form-control input-lg" name="todo" placeholder="Create a New Todo">
        </form>
        </div>
    </div>
    <hr>
    @foreach ($todos as $todo)
        {{ $todo -> todo }}
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger"> X </a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info"> Update </a>
        @if (!$todo->completed)
        <a href="{{ route('todos.completed', ['id' => $todo->id ]) }}" class="btn btn-danger">Mark As Completed </a>
        @else
        <a href="" class="btn btn-success">Completed </a>
        @endif
        <hr>
    @endforeach
@endsection
