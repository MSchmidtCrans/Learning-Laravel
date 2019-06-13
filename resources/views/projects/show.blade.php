@extends('layout')

@section('content')

<h1>{{ $project->title }} </h1>

<div>

    {{ $project->description }}

    <p>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>

</p>

</div>

@if ($project->tasks->count())
<div>
<h2>Tasks:</h2>
    @foreach($project->tasks as $task) 

        <div>
        <form action="/tasks/{{ $task->id}}" method="POST">
            @method("PATCH")
            @csrf

            <label for="completed">
                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed  ? 'checked' :  '' }} >
                {{ $task->description }};
            </label>
        </form>
        </div>
        
    @endforeach
</div>
@endif
</br>

<form action="/projects/{{ $project->id }}/tasks" method= 'POST'>

@csrf

    <label for="description">New Task</label>
    <input type="text" name="description" placeholder='description' id="" required>
    <button type="submit">Add Task</button>

</form>

@include('errors')



@endsection