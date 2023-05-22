@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task Management</h1>

        <div class="row mb-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Filter by Project</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.index') }}" method="GET">
                            <div class="form-group">
                                <label for="project_filter">Project:</label>
                                <select name="project_filter" id="project_filter" class="form-control">
                                    <option value="">All Projects</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}" {{ Request::get('project_filter') == $project->id ? 'selected' : '' }}>
                                            {{ $project->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Task List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Task Name</th>
                                    <th>Priority</th>
                                    <th>Project</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="task-list">
                                @forelse ($tasks as $task)
                                    <tr data-task-id="{{ $task->id }}">
                                        <td><i class="fas fa-grip-vertical drag-handle"></i></td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ $task->priority }}</td>
                                        <td>{{ $task->project->name ?? "No Project" }}</td>
                                        <td>
                                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No tasks found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <a href="{{ route('tasks.create') }}" class="btn btn-success">Create Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.11.0/Sortable.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var taskList = $('#task-list');
            taskList.sortable({
                handle: '.drag-handle',
                update: function (event, ui) {
                    var taskRows = taskList.find('tr');
                    taskRows.each(function (index) {
                        var taskId = $(this).data('task-id');
                        var newPriority = index + 1;

                        // Get the CSRF token from the meta tag
                        var csrfToken = $('meta[name="csrf-token"]').attr('content');

                        // Make an AJAX request to update the task priority in the backend
                        $.ajax({
                            url: '/tasks/' + taskId + '/reorder',
                            method: 'PATCH',
                            data: {
                                newPriority: newPriority
                            },
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            },
                            success: function (response) {
                                console.log(response);
                                location.reload();

                            },
                            error: function (xhr, status, error) {
                                console.error(error);
                            }
                        });
                    });
                }
            });
        });


        // document.addEventListener('DOMContentLoaded', function () {
        //     // Enable drag and drop functionality
        //     var taskList = document.getElementById('task-list');
        //     Sortable.create(taskList, {
        //         animation: 150,
        //         handle: '.drag-handle',
        //         onEnd: function (evt) {
        //             var taskRow = evt.item;
        //             var taskId = taskRow.dataset.taskId;
        //             var newIndex = Array.from(taskRow.parentNode.children).indexOf(taskRow);

        //             // Make an AJAX request to update the task priority in the backend
        //             axios.patch('/tasks/' + taskId + '/reorder', { newPriority: newIndex + 1 })
        //                 .then(function (response) {
        //                     console.log(response.data);
        //                 })
        //                 .catch(function (error) {
        //                     console.error(error);
        //                 });
        //         }
        //     });
        // });
    </script>
@endsection
