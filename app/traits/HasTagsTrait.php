<?php

namespace app\traits;

trait HasTagsTrait
{
    protected $tags = [];
     
    public function addTag($tag){
        $this->tags[]=$tag;
    }
    public function getTags(){
        $this->tags;
    }
}
