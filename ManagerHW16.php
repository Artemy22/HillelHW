<?php
/**
 * Создать класс Manager, он должен реализовать EmployeInterface и ManagerInterface.
 */

include_once ('EmployeeInterfaceHW16.php');
include_once ('ManagerInterfaceHW16.php');
include_once ('WorkerHW16.php');

class ManagerHW16 implements EmployeeInterfaceHW16, ManagerInterfaceHW16
{
    public $name;
    public $salary;
    public $position;
    public $startDate;
    public $employee;

    public $employies = [];

    public function getName()
    {
        $this-> name;
    }

    public function getSalary()
    {
        $this -> salary;
    }

    public function getPosition()
    {
        $this -> position;
    }

    public function getStartDate($startDate)
    {
        $this -> startDate;
    }

    public function getEmployees(): array
    {
        return $this->employies;
    }

    public function addEmployee(EmployeeInterfaceHW16 $employee)
    {
        $this->employies[] = $employee;
    }

    public function getCountEmployees()
    {
        return count($this->employee);
    }
    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
    }
}

$m = new ManagerHW16();
$m->addEmployee(new WorkerHW16());
$m->addEmployee(new WorkerHW16());

var_dump($m->getEmployees());
die;

$dateForManager1 = new DateTimeImmutable('2010-05-15');
$Manager1 = new  ManagerHW16('Vasiliy', 25, 1750, 'driver', $dateForManager1->format('Y-m-d\TH:i:sP'));

