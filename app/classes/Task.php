<?php
namespace app\classes;

abstract class Task
{
    protected $title;
    protected $description;
    protected $complated;


    //method---------------------------------------------------
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->complated = false;
    }
    //abstract method-------need to use this method------------------------------------
    abstract public function getPriority();
    abstract public function markAsComleted();

    //getters---------------------------------------------------
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function isCompleted()
    {
        return $this->complated;
    }


}