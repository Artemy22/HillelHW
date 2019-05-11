<?php


trait PublicTraitHW17
{
    protected $actualPass;
    protected $maxCount;
    protected $vacantSeats;
    protected $actualState;


    public function getActualPass()
    {
        return $this->actualPass;
    }


    public function getMaxCount()
    {
        return $this->maxCount;
    }


    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;
    }

    public function loadPass($addPass)
    {
        $this->actualState = 'Load';
        if ($addPass <= $this->maxCount) {
            $this->actualPass = $this->actualPass + $addPass;
        }
    }

    public function removeAll()
    {
        $this->actualState = 'Unload';
        $this->actualPass = 0;
        return 'All passengers are unloaded. Available seats: ' . $this->maxCount;
    }

    public function getVacantSeats(): int
    {
        return $this->maxCount - $this->actualPass;
    }
}
