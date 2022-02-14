<?php

class Club implements Comparable
{
    private $idClub;
    private $nomClub;
    private $nbPoints;
    private $lesSports = array();

    public function __construct($idClub, $nomClub, $nbPoints)
    {
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    /**
     * @return array
     */
    public function getLesSports(): array
    {
        return $this->lesSports;
    }

    /**
     * @param array $lesSports
     */
    public function AjouterSport(Sport $sport)
    {
        $this->lesSports[] = $sport;
    }

    /**
     * @return mixed
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @return mixed
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * @return mixed
     */
    public function getNbPoints()
    {
        return $this->nbPoints;
    }


    public function compareTo(Club $club)
    {
        // TODO: Implement compareTo() method.
    }

}