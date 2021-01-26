<?php
#defined and instantiated immediately
class App {
    public function set_logger($logger)
    {
        $this->logger = $logger;
    }
};

$app = new App();

$logger = new class {
    public function log($msg)
    {
        echo $msg;
    }
};

$app->set_logger($logger);

$duck = new class extends App {
    public function quack($msg)
    {
        echo $msg;
    }
};