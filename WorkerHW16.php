<?php
/**
 * Из предыдущего задания взять класс Worker и добавить ему интерфейс EmployeInterface,
 * необходимо добавить реализацию методов из интерфейса.
 */


include_once('EmployeeInterfaceHW16.php');

class WorkerHW16 implements EmployeeInterfaceHW16
{

    public $name;
    public $salary;
    public $position;
    public $startDate;

    /**
     * WorkerHW16 constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $startDate
     */
    public function __construct($name, $salary, $position, $startDate)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->startDate = $startDate;
    }

    public function countYears(): int
    {
        $date1 = new DateTime('now');
        $date2 = new DateTime($this->startDate);
        $different = floor(($date1->diff($date2)->days) / 365);
        return $different;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function addBonus(): void
    {
        if ($this->countYears()> 1) {
            $this->salary = $this->salary + ($this->salary * $this->countYears() * 0.05);
        }
    }

    public function getName()
    {
        $this->name;
    }

    public function getSalary()
    {
        $this->salary;
    }

    public function getPosition()
    {
        $this->position;
    }

    public function getStartDate($startDate): DateTime
    {
        $date = new DateTime($startDate);
        return $date;
    }
}
