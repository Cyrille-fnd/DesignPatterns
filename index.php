<?php

//require('src/Singleton/Singleton.php');


use src\Factory\MechanicEngineerFactory;
use src\Factory\SoftwareEngineerFactory;
use src\Singleton\Singleton;

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

echo 'Design pattern Singleton';
echo '<br>';

$callSingleton1 = Singleton::getInstance();
print $callSingleton1->getCreatedAt()->format('y-m-d h:i:s');
echo '<br>';

sleep(1);

$callSingleton1 = Singleton::getInstance();
echo $callSingleton1->getCreatedAt()->format('y-m-d h:i:s');
echo '<br>';

sleep(1);

$callSingleton2 = Singleton::getInstance();
echo $callSingleton2->getCreatedAt()->format('y-m-d h:i:s');
echo '<br>';

sleep(1);

$callSingleton3 = Singleton::getInstance();
echo $callSingleton3->getCreatedAt()->format('y-m-d h:i:s');
echo '<br><br><br>';

echo 'Design pattern Factory';
echo '<br>';
$randomInt = rand(0,1);

if ($randomInt === 0) {
    $engineerFactory = new MechanicEngineerFactory();
} else {
    $engineerFactory = new SoftwareEngineerFactory();
}

$engineerFactory->letEngineerAloneSoStuffCanBeDone();
