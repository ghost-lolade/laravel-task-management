<!-- resources/views/tasks/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Task</h1>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div class="form-group">
            <label for="name">Task Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" name="priority" id="priority" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="project">Project</label>
            <select name="project_id" id="project" class="form-control">
                <option value="">No Project</option>
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
</div>
@endsection

@push('styles')
    <style>
        .form-group label {
            font-weight: bold;
            color: green;
        }

        .btn-success {
            background-color: green;
            border-color: green;
        }
    </style>
@endpush
