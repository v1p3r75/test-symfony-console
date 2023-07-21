<?php

namespace App\Console;
use Symfony\Component\Console\Application;

class Console {


    private $application = null;

    public function __construct(public string $appName, public $appVersion) {

        $this->application = new Application($appName, $appVersion);

        $this->register();

    }

    public function register() {

        $commands = require(__DIR__ . '/Kernel.php');

        foreach($commands as $command) {
            
            $this->application->add(new $command);
        }

        $this->application->run();
    }
}