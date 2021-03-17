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
    userId varchar(40) primary key,
    username varchar(80),
    passwd varchar(40)
);