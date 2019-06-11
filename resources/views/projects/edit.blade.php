@extends('layout')

@section('content');
    <h1>Edit project</h1>

<form action="/projects/ {{ $project->id }}" method="POST">

   @method('PATCH');
    @csrf;

    <div>
        <label for="title">Title</label>
            <div>
                <input type="text" name='title'  placeholder='title' value=' {{ $project->title }}'>
            </div>
    </div>

    <div>
        <label for="description">Description</label>
    </div>
    <div>
        <textarea name="description" >{{ $project->description }}</textarea>
    </div>

<div>
    <div>
        <button type="submit">Update Project</button>
    </div>
</div>
</form>

<form method='POST' action="/projects/ {{ $project->id }}" >
    {{ method_field('DELETE') }};
    {{ csrf_field() }};

<div>
        <button type="submit">Delete Project</button>
    </div>

</form>

@endsection