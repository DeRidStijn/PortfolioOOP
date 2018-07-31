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

    public function spawnMinion($name, $type, $range, $health, $damage, $speed){
        $location = ($this->leftRight === "left") ? 0 : 20;
        //todo: check if the tower has enough money to pay for the minion
        if($this->gold >= 50){
            setGold(-50);
            $this->minions = new Minion($name, $type, $range, $health, $damage, $speed, $orientation);
        }
    }
    
    public function takeDamage($damage):int {
        $this->health -= $damage;
        return $this->health;
    }

    public function setGold(int $amount):int{
        $this->gold += $amount;
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