create database doingsdone487655

  default character set utf8
  default collate utf8_general_ci;

use doingsdone487655;

create table projects (
  id int auto_increment primary key,
  name char(128) not null,
  user_id int not null
);

create table tasks (
  id int auto_increment primary key,
  name char(128) not null,
  dt_create datetime not null default now(),
  completed int default 0,
  file char(128),
  deadline date default null,
  project_id int not null,
  user_id int not null,
);

create table users (
  id int auto_increment primary key,
  email char(128) not null unique,
  name char(128) not null,
  password char(64) not null,
  dt_add datetime not null default now()
);