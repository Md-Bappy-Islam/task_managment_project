<?php

namespace app\classes;

use app\classes\DeadlineTask;
use app\traits\HasAssigneeTrait;
use app\traits\HasTagsTrait;

class TagDeadlineTask extends DeadlineTask
{
   use HasTagsTrait, HasAssigneeTrait; 
}
