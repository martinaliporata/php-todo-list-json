<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <main>
        <div id="app">
            <h1>Aggiungi attività</h1>
            <form action="./index.php" method="get" class="new-task">
                <div>
                    <label for="data">Data: </label>
                    <input type="text" name="data" id="data" v-model="data">
                </div>
                <div>
                    <label for="nome">Nome:: </label>
                    <input type="text" name="nome" id="nome" v-model="nome">
                </div>
                <div>
                    <label for="stato">Nome:: </label>
                    <input type="text" name="stato" id="stato" v-model="stato">
                </div>
                <input type="submit" class="btn">
            </form>
            <select name="filtra" id="filtra" v-model="stato" @click="getData(stato)">
                <option value="0" > Svolto </option>
                <option value="1"> Da svolgere </option>
            </select>
            <div class="list">
                <div>
                    <h3>orario</h3>
                    <p v-for="activity in activities">
                        {{ activity.data }}
                    </p>
                </div>
                <div>
                    <h3>Attività</h3>
                    <p  v-for="activity in activities">
                    {{ activity.nome }}
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>