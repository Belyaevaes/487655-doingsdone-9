# добавление данных в таблицу пользователей
insert into users (email, name, password)
values ('lena@gmail.com', 'Лена', 'zaq1xsw2'),
       ('masha@gmail.com', 'Маша', '79132334565');

# добавление данных в таблицу проектов
insert into projects (name, user_id)
values ('Входящие', 2),
       ('Учеба', 1),
       ('Работа', 1),
       ('Домашние дела', 2),
       ('Авто', 1);

# добавление данных в таблицу задач для проектов
insert into tasks set name = 'Собеседование в IT компании',
                      project_id = 3,
                      user_id = 1,
                      deadline = 2019-05-01,
                      completed = 0;

insert into tasks set name = 'Выполнить тестовое задание',
                      project_id = 3,
                      user_id = 1,
                      deadline = 2019-12-15,
                      completed = 0;

insert into tasks set name = 'Сделать задание первого раздела',
                      project_id = 2,
                      user_id = 1,
                      deadline = 2018-12-15,
                      completed = 1;

insert into tasks set name = 'Встреча с другом',
                      project_id = 1,
                      user_id = 2,
                      deadline = 2018-12-22,
                      completed = 0;

insert into tasks set name = 'Купить корм для кота',
                      project_id = 4,
                      user_id = 2,
                      deadline = null,
                      completed = 0;

insert into tasks set name = 'Заказать пиццу',
                      project_id = 4,
                      user_id = 2,
                      deadline = null,
                      completed = 0;

# получить список из всех проектов для одного пользователя
select id, project_id, user_id FROM tasks WHERE user_id = 1;

# объединить проекты с задачами (посчитать количество задач в каждом проекте)
select p.id, p.name, count(t.id) as tasks_count from projects p
left join tasks t on p.id = t.project_id
where p.user_id = 1
group by p.id
ORDER BY t.project_id ASC;

# получить список всех задач одного проекта;
select id, dt_create, completed, name, file, deadline, project_id, user_id from tasks
where project_id = 3;

# пометить задачу как выполненную;
update tasks
set completed = 1
where id = 2;

# обновить название задачи по её идентификатору.
update tasks
set name = 'Заказать пироги'
where id = 6;