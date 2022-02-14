<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $distance, int $nbJoueurs)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
    public  function getDescription(): string
    {
        return '</br>Description : <br>Nom du sport : ' .$this->nomSport. "<br> Nb de joueurs : " .$this->nbJoueurs .' personnes<br> Distance : ' .$this->distance. 'm : <br>';
    }

}