<?php

trait FreightTraitHW17
{
    protected $actualWeight;
    protected $maxWeight;
    protected $addWeight;
    protected $unloadWeight;
    protected $actualState;

    /**
     * PublicTraitHW17 constructor.
     * @param $actualWeight
     * @param $maxWeight
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;
    }

    public function load($addWeight){
            if ($addWeight + $this->actualWeight <= $this->maxWeight) {
                $this->addWeight = $addWeight;
                $this->actualWeight = $this->actualWeight + $this->addWeight;
                $this->actualState = 'Load';
                return "Loaded: $this->actualWeight ton <br> Available: " . $this->getVacantSpace() . " ton";
            } else return "invalid weight";
        }

    public function unload($unloadWeight) {
        if ($unloadWeight <= $this->actualWeight) {
                $this->actualWeight = $this->actualWeight - $unloadWeight;
                $this->actualState = 'Unload';
                return "Unloaded: $unloadWeight ton <br>Loaded: $this->actualWeight ton <br> Available: " . $this->getVacantSpace() . " ton";
            } else return "invalid weight";
        }


    public function getVacantSpace(): int
    {
        return $this->maxWeight - $this->actualWeight;
    }

    public function removeWeight(){
        $this->actualWeight = 0;
    }


}