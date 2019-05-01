<?php

$show_complete_tasks = rand(0, 1);
$project_name = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

$proj_tasks = [
    [
        'task_title' => 'Собеседование в IT компании',
        'date' => '01.05.2019',
        'project' => 'Работа',
        'completed' => 0,
    ],
    [
        'task_title' => 'Выполнить тестовое задание',
        'date' => '25.12.2019',
        'project' => 'Работа',
        'completed' => 0,
    ],
    [
        'task_title' => 'Сделать задание первого раздела',
        'date' => '21.12.2018',
        'project' => 'Учеба',
        'completed' => 1,
    ],
    [
        'task_title' => 'Встреча с другом',
        'date' => '22.12.2018',
        'project' => 'Входящие',
        'completed' => 0,
    ],
    [
        'task_title' => 'Купить корм для кота',
        'date' => 'Нет',
        'project' => 'Домашние дела',
        'completed' => 0,
    ],
    [
        'task_title' => 'Заказать пиццу',
        'date' => 'Нет',
        'project' => 'Домашние дела',
        'completed' => 0,
    ]
];