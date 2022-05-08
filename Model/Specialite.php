<?php
class Specialite  {
    private int $ID_SPEC;
    private string $TYPE_SPEC;
    private string $NOM_SPEC;

    public function __construct(int $ID_SPEC,string $TYPE_SPEC,string $NOM_SPEC)
    {
            $this->ID_SPEC=$ID_SPEC;
            $this->NOM_SPEC=$NOM_SPEC;
            $this->TYPE_SPEC=$TYPE_SPEC;
    }
    public function getID_SPEC()
    {
        return $this->ID_SPEC;
    }
    public function setID_SPEC(int $ID_SPEC)
    {
    $this->getID_SPEC=$ID_SPEC;
    }

    public function getNOM_SPEC()
    {
        return $this->NOM_SPEC;
    }
    public function setNOM_SPEC(string $NOM_SPEC)
    {
    $this->NOM_SPEC=$NOM_SPEC;
    }
    public function getTYPE_SPEC()
    {
        return $this->TYPE_SPEC;
    }
    public function setAdresse(string $TYPE_SPEC)
    {
    $this->TYPE_SPEC=$TYPE_SPEC;
    }

}
    ?>
        