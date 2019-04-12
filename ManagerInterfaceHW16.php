<?php
/**
 * Создать интерфейс ManagerInterface,
 * в нем содержатся методы getEmployees(), addEmploye(EmployeeInterface $employe), getCountEmployees().
 */

interface ManagerInterfaceHW16
{
    public function getEmployees();
    public function addEmployee(EmployeeInterfaceHW16 $employee);
    public function getCountEmployees();
}