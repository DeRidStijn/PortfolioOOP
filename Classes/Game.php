<?php

namespace Classes;
class Game{
    private $towerLeft;
    private $towerRight;
    private $towersTurn = "left";
    public function __construct(string $towerLeftName, int $towerLeftIncome, int $towerLeftHealth, string $towerRightName, int $towerRightIncome, int $towerRightHealth){
        //toDo: start game by making 2 instances of tower class
        $this->towerLeft = new Tower($towerLeftName, $towerLeftIncome, $towerLeftHealth, "left");
        $this->towerRight = new Tower($towerRightName, $towerRightIncome, $towerRightHealth, "right");
        $this->towersTurn = (rnd(0,1) === 1 ? "left" : "right");
    }

    public function nextTurn(){
        $this->towersTurn = ($this->towersTurn === "left") ? "right" : "left";
        if ($this->towersTurn === "left"){
            $towerLeft->setEnemyMinions(getEnemyMinions("left"));
        }
        else{
            $towerRight->setEnemyMinions(getEnemyMinions("right"));
        }
    }
    public function getEnemyMinions(string $leftRight){
        return ($leftRight === "left") ? $this->towerLeft->getMinions() : $this->towerRight->getMinions();
    }
    public function getTowerLeftName(){
        return $this->towerLeft->getName();
    }
}