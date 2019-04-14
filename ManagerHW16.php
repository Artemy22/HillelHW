<?php
/**
 * Создать класс Manager, он должен реализовать EmployeInterface и ManagerInterface.
 */

include_once('EmployeeInterfaceHW16.php');
include_once('ManagerInterfaceHW16.php');
include_once('WorkerHW16.php');

class ManagerHW16 implements EmployeeInterfaceHW16, ManagerInterfaceHW16
{
    public $name;
    public $salary;
    public $position;
    public $startDate;
    public $employee;

    public $employies = [];

    /**
     * ManagerHW16 constructor.
     * @param $name
     * @param $salary
     * @param $startDate
     */
    public function __construct($name, $salary, $startDate)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->startDate = $startDate;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function countYears(): int
    {
        $date1 = new DateTime('now');
        $date2 = new DateTime($this->startDate);
        $different = floor(($date1->diff($date2)->days) / 365);
        return $different;
    }

    public function addBonus()
    {
        if ($this->countYears() > 1) {
            $this->salary = $this->salary + ($this->salary * $this->countYears() * 0.05) + ($this->salary * 0.02 * $this->getCountEmployees());
        }
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $salary
     */


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

    public function getEmployees()
    {
        return $this->employies;
    }

    public function addEmployee(WorkerHW16 $employee)
    {
        $this->employies[] = $employee;;
    }

    public function getCountEmployees()
    {
        return count($this->employies);
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }
}