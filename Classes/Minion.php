<?php

namespace Classes;

class Minion{
    private $name = "";
    private $type = "";
    private $range = 0;
    private $health = 0;
    private $damage = 0;
    private $speed = 0;
    private $location = 0;
    private $orientation = "left";
    public function __construct(string $name, string $type, int $range, int $health, int $damage, int $speed, string $orientation){
        //toDo: let range, health and damage depend on type?
        $this->name = $name;
        $this->type = $type;
        $this->range = $range;
        $this->health = $health;
        $this->damage = $damage;
        $this->speed = $speed;
        $this->location = ($orientation === "left" ? 0 : 20);
        $this->orientation = $orientation;
    }

    public function move(){
        ($this->orientation === "left") ? ($this->location += (1 * $this->speed)) : ($this->location -= (1 * $this->speed));
    }

    public function attack(){

    }

    public function takeDamage(){

    }

    public function die(){
        
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of range
     */ 
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Get the value of health
     */ 
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Get the value of damage
     */ 
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }
}