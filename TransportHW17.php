<?php

require_once "PublicTraitHW17.php";
require_once "FreightTraitHW17.php";
require_once "AbstractChangeStateHW17.php";

class TransportHW17 extends AbstractChangeStateHW17
{
    use PublicTraitHW17;
    use FreightTraitHW17;

    public function getState()
    {
        return $this->actualState;
    }
}