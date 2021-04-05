<?php

namespace Deliverea\CoffeeMachine\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="sold_drinks")
*/
class SoldDrink
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    */
    protected $id;
    
    /**
    * @ORM\Column(type="string")
    */
    protected $type;
    
    /**
    * @ORM\Column(type="float")
    */
    protected $prize;
    
    /** 
    * @ORM\Column(type="datetime", name="posted_at", nullable=true) 
    */    
    private $postedAt;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getPrize()
    {
        return $this->prize;
    }
    
    public function getPostedAt()
    {
        return $this->postedAt;
    }
    
    public function setType($type)
    {
        $this->type = $type;
    }
    public function setPrize($prize)
    {
        $this->prize = $prize;
    }
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;
    }
}