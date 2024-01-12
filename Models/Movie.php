<?php
class Movie
{
    public $type_film;
    public $duration;
    public $n_actor;
    public $year;
    public $country;

    //Costruttore, viene richiamato dove scriviamo new Movie(...)
    public function __construct($type, $time, $actors, $year, $nazione)
    {
        //Prendo gli argomenti passati e li assegno a QUESTA istanza che sto creando
        $this->type_film = $type;
        $this->duration = $time;
        $this->n_actor = $actors;
        $this->year = $year;
        $this->country = $nazione;
    }

    public function getFullMovie()
    {
        $result = $this->type_film . ", " . $this->duration . " - " . $this->country . " (" . $this->year . ")";
        return $result;
    }
}
