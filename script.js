document.getElementById('add-btn').addEventListener('click', addTodo);
document.getElementById('delete-all-btn').addEventListener('click', deleteAll);
document.getElementById('logout-btn').addEventListener('click', logout);

function addTodo() {
    const task = document.getElementById('task').value;
    const dueDate = document.getElementById('due-date').value;

    fetch('add_todo.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ task, dueDate })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            loadTodos();
        }
    });
}

function loadTodos() {
    fetch('get_todos.php')
    .then(response => response.json())
    .then(data => {
        const tbody = document.getElementById('todo-table-body');
        tbody.innerHTML = '';
        data.todos.forEach(todo => {
            tbody.innerHTML += `
                <tr>
                    <td>${todo.task}</td>
                    <td>${todo.due_date}</td>
                    <td>${todo.status}</td>
                    <td>
                        <button onclick="editTodo(${todo.id})">Edit</button>
                        <button onclick="deleteTodo(${todo.id})">Delete</button>
                    </td>
                </tr>
            `;
        });
    });
}

function deleteAll() {
    fetch('delete_all.php', { method: 'POST' })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            loadTodos();
        }
    });
}

function logout() {
    // Your logout logic here
}

loadTodos();