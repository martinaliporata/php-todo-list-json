<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main id="app">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>To Do List Json</h1>
                    <section class="todo-list">
                        <ul>
                            <!-- ternario per sottolinearli o no -->
                            <li class="list-group-item list-group-item-action" v-for="toDoElement in toDoList" :class="toDoElement.completed ? 'text-decoration-line-through' :''">
                                {{toDoElement.name}} - {{toDoElement.description}}
                            </li>
                        </ul>
                    </section>
                    <section class="user-input">
                        <input type="text" class="input-group" @keyup.enter="addTask" v-model="newTaskName">
                        <!-- <input type="text" class="input-group" @keyup.enter="addTask" v-model="newTaskDescription"> -->
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- js -->
    <script src="./js/script.js"></script>
</body>
</html>
