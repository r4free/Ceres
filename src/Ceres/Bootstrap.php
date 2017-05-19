<?php
namespace Ceres;
class Bootstrap{

    /**
     *  constructor.
     */
    public function __construct()
    {
        $config = require_once "../App/config.php";

        new \Ceres\Route($config);

    }
}


