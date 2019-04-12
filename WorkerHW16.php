<?php
/**
 * Из предыдущего задания взять класс Worker и добавить ему интерфейс EmployeInterface,
 * необходимо добавить реализацию методов из интерфейса.
 */


include ('EmployeeInterfaceHW16.php');

class WorkerHW16 implements EmployeeInterfaceHW16
{
    private $name;
    private $age;
    private $salary;
    private $position;
    private $startDate;

    public function __construct($name, $age, $salary)
    {
        $this->setName($name);
        $this->setSalary($salary);
        $this->setAge($age);
    }

    private function checkAge($age) : bool
    {
        if ($age <= 100 && $age >= 1)
            return true;
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

    public function getStartDate() {
        return DateTimeInterface::W3C;
    }
}

$test = new WorkerHW16('Valeriy', 27, 1700);
 print_r ($test);