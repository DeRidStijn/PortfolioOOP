<?php 
namespace Classes;
class Tower{
    private $name = "";
    private $gold = 0;
    private $health = 0;
    private $minions = [];
    private $leftRight = "left";
    public function __construct(string $name, int $gold, int $health, string $leftRight){
        $this->name = $name;
        $this->gold = $gold;
        $this->health = $health;
    }

    public function spawnMinion(){

    }
    
    public function takeDamage():int {

    }

    public function setGold(int $amount):int{

    }

    public function getName():string{
        return $this->name;
    }

    public function getGold():int{
        return $this->gold;
    }

    public function getHealth():int{
        return $this->health;
    }
}