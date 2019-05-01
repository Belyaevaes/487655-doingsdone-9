<?php

function countProjectTasks(array $proj_tasks, $project_name) {
    $number = 0;

    foreach ($proj_tasks as $value) {
        if (isset($value['project']) && ($value ['project'] === $project_name)) {
            $number++;
        }
    }
    return $number;
}