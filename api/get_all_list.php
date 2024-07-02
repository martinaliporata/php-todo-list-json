<?php
// 1-proviamo a esporre la todolist da get all list -->
// prendi la lista dei toDo e poi mostrala in json(essendo già in json, non devo tradurla)

header('Content-Type: application/json');
// basta questo perché arriva già in json
$toDoList = file_get_contents('../db/toDoList.json');
echo $toDoList;

// 2- i dati così sonoe esposti corretmante quindi vado nel mio index.php
?>