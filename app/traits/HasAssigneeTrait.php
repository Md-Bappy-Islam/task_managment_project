<?php

namespace app\traits;

trait HasAssigneeTrait{
    protected $assignees=[];
    public function addAssaignee($assignee){
        $this->assignees[]=$assignee;
    }
    public function getAssaignees(){
        $this->assignees;
    }
}