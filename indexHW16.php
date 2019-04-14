<?php

include_once('WorkerHW16.php');
include_once('ManagerHW16.php');
include_once('EmployeeInterfaceHW16.php');
include_once('ManagerInterfaceHW16.php');


$manager1 = new ManagerHW16('ManagerOne', 15000, '2010-05-15');
$worker1 = new WorkerHW16('Andrew', 8000, 'Policeman', '2013-05-15');
$worker1->addBonus();
$manager1->addEmployee($worker1);
$worker2 = new WorkerHW16('Luisa', 2000, 'Hairdresser', '2018-05-15');
$worker2->addBonus();
$manager1->addEmployee($worker2);
$worker3 = new WorkerHW16('Ivan', 1000, 'Doctor', '2014-05-15');
$worker3->addBonus();
$manager1->addEmployee($worker3);
$manager1->addBonus();
$count1 = count($manager1->employies);

echo "Manager name: " . $manager1->name . "<br> Salary: " . $manager1->salary . " <br> Workers count: " . $count1;

$manager2 = new ManagerHW16('ManagerOne', 16000, '2010-05-15');
$worker1 = new WorkerHW16('Andreew', 7000, 'Policeman1', '2010-05-15');
$worker1->addBonus();
$manager2->addEmployee($worker1);
$worker2 = new WorkerHW16('Lurisa', 3000, 'Hairdresser2', '2015-05-15');
$worker2->addBonus();
$manager2->addEmployee($worker2);
$worker3 = new WorkerHW16('Ivtan', 5000, 'Doctor3', '2016-05-15');
$worker3->addBonus();
$manager2->addEmployee($worker3);
$manager2->addBonus();
$count2 = count($manager2->employies);

echo "<br>Manager name: " . $manager2->name . "<br> Salary: " . $manager2->salary . " <br> Workers count: " . $count2;

echo "new branch";