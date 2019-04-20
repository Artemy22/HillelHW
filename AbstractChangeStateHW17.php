<?php

require_once "PublicTraitHW17.php";
require_once "FreightTraitHW17.php";

abstract class AbstractChangeStateHW17
{
    use PublicTraitHW17;
    use FreightTraitHW17;

    protected $actualState;

    abstract protected function getState();

    public function changeState($actualState)
    {
            $this->actualState = $actualState;
    }

    /**
     * @return mixed
     */
    public function getActualWeight()
    {
        return $this->actualWeight;
    }

    /**
     * @return mixed
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

}