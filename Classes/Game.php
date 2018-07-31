<?php

namespace Classes;
class Game{
    private $towerLeft;
    private $towerRight;

    public function __construct(string $towerLeftName, int $towerLeftIncome, int $towerLeftHealth, string $towerRightName, int $towerRightIncome, int $towerRightHealth){
        //toDo: start game by making 2 instances of tower class
        $this->towerLeft = new Tower($towerLeftName, $towerLeftIncome, $towerLeftHealth, "left");
        $this->towerRight = new Tower($towerRightName, $towerRightIncome, $towerRightHealth, "right");
    }

    public function getTowerLeftName(){
        return $this->towerLeft->getName();
    }
}