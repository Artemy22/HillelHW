<?php
/**
 * Created by PhpStorm.
 * User: zzgh
 * Date: 19.04.19
 * Time: 22:53
 */

trait PublicTraitHW17
{
    protected $actualPass;
    protected $maxCount;
    protected $vacantSeats;
    protected $actualState;

    /**
     * @return mixed
     */
    public function getActualPass()
    {
        return $this->actualPass;
    }

    /**
     * @return mixed
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * PublicTraitHW17 constructor.
     * @param $actualPass
     * @param $maxCount
     */
    public function setMaxCount($maxCount)
    {
        $this->maxCount = $maxCount;
    }

    public function loadPass ($addPass) {
            $this->actualState = 'Load';
            if ($addPass <= $this->maxCount) {
                $this->actualPass = $this->actualPass + $addPass;
            }
        }

    public function removeAll() {
        $this->actualState = 'Unload';
        $this->actualPass = 0;
        return 'All passengers are unloaded. Available seats: '.$this->maxCount;
        }


    /**
     * @return mixed
     */
    public function getVacantSeats(): int
    {
        return $this->maxCount - $this->actualPass;
    }
}
