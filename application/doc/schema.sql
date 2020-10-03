create database open_bible;
use open_bible;

create table users(
  id integer not null primary key auto_increment,
  email varchar(255),
  password varchar(255)
);

create table chapters(
  id integer not null primary key auto_increment,
  title varchar(255)
);

create table verses(
  id integer not null primary key auto_increment,
  chapter_id integer,
  number varchar(255),
  content mediumtext
);

alter table users add username varchar(255);

create table books(
  id integer not null primary key auto_increment,
  name varchar(255)
);

alter table chapters add book_id integer;
alter table verses change number number integer;
alter table chapters change title title integer;
