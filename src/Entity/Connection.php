<?php

namespace Deliverea\CoffeeMachine\Entity;

use Doctrine\ORM\EntityManager;

class Connection {
    
    /**
    * @var \Doctrine\ORM\EntityManager
    */
    private static $em = null;
    
    public static function getManager() 
    {
        require "config/bootstrap.php";
        
        if (self::$em != null) {
            return self::$em;
        }
        self::$em = EntityManager::create($conn, $config);

        return self::$em;
    }
    
    
    
}