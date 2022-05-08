<?php
class Departement {
    private int $ID_DEPART;
    private string $NOM_DEPART;
    private int $NB_PLACES;
    private int $ID_SPEC;
    private string $pict;
    public function __construct(int $ID_DEPART,string $NOM_DEPART,int $NB_PLACES,int $ID_SPEC,string $pict)
    {
            $this->ID_SPEC=$ID_SPEC;
            $this->ID_DEPART=$ID_DEPART;
            $this->NB_PLACES=$NB_PLACES;
            $this->NOM_DEPART=$NOM_DEPART;
            $this->pict=$pict;
    }
    public function getpict()
    {
        return $this->pict;
    }
    public function setpict(string $pict)
    {
    $this->getpict=$pict;
    }

    public function getID_SPEC()
    {
        return $this->ID_SPEC;
    }
    public function setID_SPEC(int $ID_SPEC)
    {
    $this->getID_SPEC=$ID_SPEC;
    }

    public function getNOM_DEPART()
    {
        return $this->NOM_DEPART;
    }
    public function setNOM_DEPART(string $NOM_DEPART)
    {
    $this->NOM_SPEC=$NOM_SPEC;
    }
    public function getNB_PLACES()
    {
        return $this->NB_PLACES;
    }
    public function setNB_PLACES(int $NB_PLACES)
    {
    $this->NB_PLACES=$NB_PLACES;
    }

    public function getID_DEPART()
    {
        return $this->ID_DEPART;
    }
    public function setID_DEPART(int $ID_DEPART)
    {
    $this->ID_DEPART=$ID_DEPART;
    }

}
    ?>
        