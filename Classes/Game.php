<?php

namespace Classes;
class Game{
    private $towerLeft;
    private $towerRight;
    private $towersTurn = "left";
    private $enemyMinions = [];
    public function __construct(string $towerLeftName, int $towerLeftIncome, int $towerLeftHealth, string $towerRightName, int $towerRightIncome, int $towerRightHealth){
        //toDo: start game by making 2 instances of tower class
        $this->towerLeft = new Tower($towerLeftName, $towerLeftIncome, $towerLeftHealth, "left");
        $this->towerRight = new Tower($towerRightName, $towerRightIncome, $towerRightHealth, "right");
        $this->towersTurn = (rnd(0,1) === 1 ? "left" : "right");
    }

    public function nextTurn(){
        $this->towersTurn = ($this->towersTurn === "left") ? "right" : "left";
        if ($this->towersTurn === "left"){
            $towerLeft->setEnemyMinions(getEnemyMinions("right"));
            $enemyMinions = getEnemyMinions("right");
        }
        else{
            $towerRight->setEnemyMinions(getEnemyMinions("left"));
            $enemyMinions = getEnemyMinions("left");
        }
    }

    public function moveMinionsAndAttack(){
        foreach ($this->towerLeft->getMinions() as $minion){
            $location = $minion->getLocation();
            foreach ($this->towerRight->getMinions() as $enemyMinion){
                if ($location === $enemyMinion->getLocation()){
                    echo "an epic battle takes place here";
                    $enemyMinion->takeDamage($minion->getDamage());
                    $minion->takeDamage($enemyMinion->getDamage());
                }
                if ($minion->getHealth() > 0){
                    $minion->move();
                }
            }
        }
    }
    public function getEnemyMinions(string $leftRight){
        return ($leftRight === "left") ? $this->towerLeft->getMinions() : $this->towerRight->getMinions();
    }
    public function getTowerLeftName(){
        return $this->towerLeft->getName();
    }
}