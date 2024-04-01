<?php

use src\AbstractFactory\EngineerFactoryInterface;
use src\AbstractFactory\JuniorEngineerFactory;
use src\AbstractFactory\SeniorEngineerFactory;
use src\Adapter\EngineerHiringPlatformAdapter;
use src\Adapter\EngineerHiringPlatformInterface;
use src\Adapter\InternalHiringProcess;
use src\Adapter\SomeExternalHiringProcess;
use src\Factory\MechanicEngineerFactory;
use src\Factory\SoftwareEngineerFactory;
use src\Singleton\Singleton;

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

echo 'Design pattern Singleton <br />';

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

echo 'Design pattern Factory <br />';
$randomInt = rand(0,1);

if ($randomInt === 0) {
    $engineerFactory = new MechanicEngineerFactory();
} else {
    $engineerFactory = new SoftwareEngineerFactory();
}

$engineerFactory->letEngineerAloneSoStuffCanBeDone();
echo '<br><br><br>';

echo 'Design pattern abstract Factory <br />';

class Application
{
    private EngineerFactoryInterface $engineerFactory;

    public function __construct(EngineerFactoryInterface $engineerFactory)
    {
        $this->engineerFactory = $engineerFactory;
    }

    public function launch() {
        $engineer = $this->engineerFactory->hireSoftwareEngineer();
        $engineer->doSoftwareEngineerStuff();
    }
}

if ($randomInt === 0) {
    $engineerFactory = new JuniorEngineerFactory();
} else {
    $engineerFactory = new SeniorEngineerFactory();
}

$app = new Application($engineerFactory);
$app->launch();
echo '<br><br><br>';

echo 'Design pattern Adapter <br />';

class AdapterApplication
{
    private EngineerHiringPlatformInterface $hiringPlatform;

    public function __construct(EngineerHiringPlatformInterface $hiringPlatform)
    {
        $this->hiringPlatform = $hiringPlatform;
    }

    public function startHiringProcess() {
        echo 'Starting hiring process <br />';

        if (!$this->hiringPlatform->testEngineerSkills()) {
            echo 'Technical test has been failed by engineer <br />';

            return;
        }

        if (!$this->hiringPlatform->proposeContractToEngineer()) {
            echo 'Contract has been refused by engineer <br />';

            return;
        }

        $this->hiringPlatform->shakeHandsWithEngineer();

        echo 'hiring process done <br />';
    }
}

$internalHiringProcess = new EngineerHiringPlatformAdapter(new SomeExternalHiringProcess());
$adapterApp = new AdapterApplication($internalHiringProcess);
$adapterApp->startHiringProcess();
