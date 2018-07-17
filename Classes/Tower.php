<?php 
class Tower{
    private $name = "";
    private $gold = 0;
    private $health = 0;
    private $minions = [];
    public function __construct(string $name, int $gold, int $health){
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