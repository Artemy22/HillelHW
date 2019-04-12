<?php
/**
 * Из предыдущего задания взять класс Worker и добавить ему интерфейс EmployeInterface,
 * необходимо добавить реализацию методов из интерфейса.
 */


include_once('EmployeeInterfaceHW16.php');

class WorkerHW16 implements EmployeeInterfaceHW16
{
    private $name;
    private $age;
    private $salary;
    private $position;
    private $startDate;

    /**
     * WorkerHW16 constructor.
     * @param $name
     * @param $age
     * @param $salary
     * @param $position
     * @param $startDate
     */
    public function __construct($name = '', $age = '', $salary = '', $position = '')
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->setAge($age);
        $this->position = $position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }




    private function checkAge($age): bool
    {
        if ($age <= 100 && $age >= 1) {
            return true;
        }

        return false;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if ($this->checkAge($age) == 1) {
            $this->age = $age;
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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getStartDate($startDate): DateTimeInterface
    {
       $res = new DateTimeImmutable($startDate);
       $res->format('Y-m-d\TH:i:sP');
       return $res;
    }
}

