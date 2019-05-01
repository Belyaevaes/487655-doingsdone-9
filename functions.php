<?php
define('SECS_IN_HOUR', 3600);

function countProjectTasks(array $proj_tasks, $project_name) {
    $number = 0;

    foreach ($proj_tasks as $value) {
        if (isset($value['project']) && ($value ['project'] === $project_name)) {
            $number++;
        }
    }
    return $number;
}

function checkExpirationDate($date, $expirationHours = 24) {
            $tsDate = strtotime($date);
            $tsNow = time();
            $tsDiff = $tsDate - $tsNow;
            if ($date !== 'Нет') {
            $hoursDiff = floor($tsDiff / SECS_IN_HOUR);
            }
            else {
            $hoursDiff = 25;
            }

    return ($hoursDiff <= $expirationHours);
}