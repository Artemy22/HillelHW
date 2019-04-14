<?php
/**
 * Создать интерфейс EmployeeInterfaceHw16 - который отвечает за работника компании,
 * содержит методы - getName(), getSalery(), getPosition() (должность), getStartDate()
 * (возвращаемая дата будет объект типа - DateTimeInterface).
 */

interface EmployeeInterfaceHW16
{
    public function getName();

    public function getSalary();

    public function getPosition();

    public function getStartDate($startDate): DateTime;

}