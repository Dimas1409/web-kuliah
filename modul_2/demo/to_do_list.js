
const todoInput = document.getElementById('todoText');
const listItems = document.getElementById('list-items');
const alertMessage = document.getElementById('Alert');

function CreateToDo() {
    const todoText = todoInput.value.trim();

    if (todoText === "") {
        alertMessage.innerText = "Masukkan Tugas!";
        alertMessage.style.color = "red";
        return;
    }

    alertMessage.innerText = "";

    const li = document.createElement('li');
    li.className = 'list-item';

    const textNode = document.createTextNode(todoText);

    const deleteButton = document.createElement('button');
    deleteButton.className = 'delete-btn';
    deleteButton.innerHTML = 'Delete';
    deleteButton.onclick = function() {
        DeleteToDoItem(li);
    };

    li.appendChild(textNode);
    li.appendChild(deleteButton);

    listItems.appendChild(li);

    todoInput.value = '';
}

function DeleteToDoItem(item) {
    listItems.removeChild(item);
}
