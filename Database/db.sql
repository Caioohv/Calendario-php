-- #### MySQL 

-- to create the database

create database calendarapp;

-- to create the table

create table events(
  id serial primary key,
  user varchar(40),
  name varchar(100),
  description varchar(255),
  local varchar(60),
  start_time timestamp,
  end_time timestamp
);

create table user(
    email varchar(40) primary key,
    passwd varchar(40)
)