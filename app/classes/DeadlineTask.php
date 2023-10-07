<?php

namespace app\classes;

use app\classes\Task;
use app\interfaces\HasStartDateInterface;
use app\interfaces\HasDueDateInterface;
use app\traits\HasAssigneeTrait;
use app\traits\HasTagsTrait;

class DeadlineTask extends Task implements HasStartDateInterface,HasDueDateInterface
{
    use HasAssigneeTrait;
    
    protected $startdate;
    protected $duedate;

    public function __construct($title, $description, $startdate, $duedate)
    {
        parent::__construct($title, $description);
        $this->startdate = $startdate;
        $this->duedate = $duedate;
    }
    public function getStartDate()
    {
        return $this->startdate;
    }
    public function getDueDate()
    {
        return $this->duedate;
    }
    public function getPriority(){
        return "low";
    }
    public function markAsComleted(){
        $this->complated=true;
    }
}



