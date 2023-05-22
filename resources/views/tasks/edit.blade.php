<!-- resources/views/tasks/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>

        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Task Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $task->name }}" required>
            </div>

            <div class="form-group">
                <label for="priority">Priority</label>
                <input type="number" name="priority" id="priority" class="form-control" value="{{ $task->priority }}" required>
            </div>

            <div class="form-group">
                <label for="project">Project</label>
                <select name="project_id" id="project" class="form-control">
                    <option value="">No Project</option>
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" {{ $task->project_id == $project->id ? 'selected' : '' }}>
                            {{ $project->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection

@push('styles')
    <style>
        .form-group label {
            font-weight: bold;
            color: yellow;
        }

        .btn-warning {
            background-color: yellow;
            border-color: yellow;
        }
    </style>
@endpush
