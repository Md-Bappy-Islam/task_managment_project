<?php

use app\classes\DeadlineTask;
use app\classes\TagDeadlineTask;

include 'autoloder.php';

$task1 = new TagDeadlineTask('title-1', 'You shoud do this within 5 days', '08-10-2023', '10-10-2023');

$task1->addTag('Back_end');
$task1->addTag('Front_end');
$task1->addAssaignee('Bappy');
$task1->addAssaignee('Badhon');


$task2 = new DeadlineTask('title-1', 'You shoud do this within 7 days', '05-10-2023', '09-10-2023');
$task2->getPriority();
$task2->isCompleted();
$task2->addAssaignee('Md Rabbi');
$task2->addAssaignee('Md Bappy');

$tasks = [$task1, $task2];
foreach ($tasks as $task) {
    echo "Title:" . $task->getTitle() . "\n";
    echo "Description:" . $task->getDescription() . "\n";
    echo "Start date:" . $task->getStartDate() . "\n";
    echo "Due date:" . $task->getDueDate() . "\n";


    if ($task instanceof TagDeadlineTask) 
    {
        echo "tags:" . implode(', ', $task->getTags()) . "\n";
    }
    echo "asignee:" . implode(', ', $task->getAssaignees()) . "\n";
    echo "priority:" . $task->getPriority() . "\n";
    echo "completed:" . ($task->isCompleted() ? "Yes" : "No") . "\n";
  

} 
