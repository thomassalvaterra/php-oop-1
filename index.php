<?php

/* Importo i modelli, cioè le "definizioni" delle classi di oggetto */
require __DIR__ . '/Models/Movie.php';

// Creo un oggetto "movie" già popolato tramite il costruttore presente nel modello
$hulk_Nik = new Movie("Action", "120 min", 8, 2003, "USA");
// Popolo/altero l'attributo città in secondo momento
$hulk_Nik->country = "Hollywood";

//Per stampare oggetti non basta un echo
echo "<h2>Stampo oggetti Film</h2>";
var_dump($hulk_Nik);

//Posso stampare una proprietà dell'istanza. Ognuno avrà valori propri e diversi.
echo "<h2>Stampo proprietà degli oggetti film</h2>";
echo $hulk_Nik->type_film . "<br>";

//Posso richiamare un metodo dell'istanza. Ognuno avrà valori propri e diversi.
echo "<h2>Chiamo metodi degli oggetti indirizzo</h2>";
echo $hulk_Nik->getFullMovie() . "<br>";
