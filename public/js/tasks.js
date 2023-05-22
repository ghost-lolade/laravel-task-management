// resources/js/tasks.js
document.addEventListener('DOMContentLoaded', function() {
    const taskList = document.getElementById('task-list');

    Sortable.create(taskList, {
        animation: 150,
        onUpdate: function(event) {
            const taskElements = taskList.getElementsByClassName('task-item');
            const tasks = [];

            // Get the updated order of tasks
            for (let i = 0; i < taskElements.length; i++) {
                tasks.push(taskElements[i].dataset.taskId);
            }

            // Send an AJAX request to update the task priorities in the backend
            axios.patch('/tasks/reorder', { tasks: tasks })
                .then(response => {
                    // Handle success response
                })
                .catch(error => {
                    // Handle error response
                });
        }
    });
});
