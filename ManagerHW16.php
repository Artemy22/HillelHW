<?php
/**
 * Создать класс Manager, он должен реализовать EmployeInterface и ManagerInterface.
 */

include ('EmployeeInterfaceHW16.php');
include ('ManagerInterfaceHW16.php');

class ManagerHW16 implements EmployeeInterfaceHW16, ManagerInterfaceHW16
{
    public $name;
    public $salary;
    public $position;
    public $startDate;
    public $employee;

    public function getName()
    {
        $this->name;// TODO: Implement getName() method.
    }

    public function getSalary()
    {
        // TODO: Implement getSalary() method.
    }

    public function getPosition()
    {
        // TODO: Implement getPosition() method.
    }

    public function getStartDate(): DateTimeInterface
    {
        // TODO: Implement getStartDate() method.
    }

    public function getEmployees()
    {
        // TODO: Implement getEmployees() method.
    }

    public function addEmployee(EmployeeInterfaceHW16 $employee)
    {
        // TODO: Implement addEmployee() method.
    }

    public function getCountEmployees()
    {
        // TODO: Implement getCountEmployees() method.
    }
}


