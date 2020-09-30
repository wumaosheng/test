<?php
namespace Foo\test;

class Demo{

    public function  __construct()
    {
        echo 'Foo\test\Demo--init';
    }
    public function  get(){


        $log = new \Monolog\Logger('name');
        $log->pushHandler(new \Monolog\Handler\StreamHandler('app.log', \Monolog\Logger::WARNING));

        $log->addWarning('Foo hhhh');

        return 'Demo---get()';
    }

}