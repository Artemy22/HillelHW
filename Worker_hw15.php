<?php
/**
 * Сделайте класс Worker, в котором будут следующие private поля
 *- name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
 * Дополните класс  private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
 * Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
 * Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
 * Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
 */

class Worker_hw15
{
    private $name;
    private $age;
    private $salary;

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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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

}

$newWorker1 = new Worker_hw15('Ivan', 25, 1000);
$newWorker2 = new Worker_hw15('Vasia', 26, 2000);

$sumSalBoth = $newWorker1->getSalary() + $newWorker2->getSalary();
$sumAgeBoth = $newWorker1->getAge() + $newWorker2->getAge();

echo "Salary sum of " . $newWorker1->getName() . " and " . $newWorker2->getName() . "= $sumSalBoth";
echo "\n<br>\n";
echo "Age sum of " . $newWorker1->getName() . " and " . $newWorker2->getName() . "  = $sumAgeBoth";
