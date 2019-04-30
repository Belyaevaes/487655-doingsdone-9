<?php

require_once('helpers.php');
require_once('functions.php');
require_once('data.php');

$show_complete_tasks = rand(0, 1);

$userName = 'Константин';

$pageContent = include_template('index.php', [
    'tasks' => $proj_tasks,
    'showCompleteTasks' => $show_complete_tasks,
]);

$layoutContent = include_template('layout.php', [
    'pageContent' => $pageContent,
    'pageTitle' => 'Дела в порядке',
    'userName' => $userName,
    'projects' => $project_name,
    'tasks' => $proj_tasks
]);

print($layoutContent);