<?php
header("content_type: application/json");
// Prendo il mio file js con file_get_contents (dove si trova) e lo salvo in una variabile e apparirà il json - recupero i dati in json
$rawToDoList = file_get_contents("./db/todoList.json");
// ora però appare come stringa; se mi serve, per trasformarlo in un array devo usare file con json_decode CON VALORE TRUE (decodifica queste info).
// rawdata appare come una stringa, data come un array associativo (serve tru eper forza per dirgli che è un array associativo) - li traducoin un array e gli chiedo che sia associativo con true
$toDoList = json_decode($rawToDoList, true);

// se stato è settato, allora filtro
if ($_GET["stato"] === "") {
    $toDoList = json_decode($rawToDoList, true);
} else {
    $toDoList = array_filter($toDoList, fn($element) => $element["stato"] === $_GET["stato"]);
}
// Ora non solo scrivilo in json (dati filtrati in json)...
$jsonFiltredList = json_encode($toDoList);

// ..ma da qualche parte (scrivi nel file che è in db animaliFiltrati e cosa ci devo scrivere? jsonFilteredData - gli dico dove e cosa scrivere)
file_put_contents("./db/toDoListFiltrata.json",$jsonFiltredList);

// così ci saranno tutti gli animali filtrati
echo file_get_contents("./db/toDoListFiltrata.json");
?>