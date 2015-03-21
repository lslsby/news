#create database news;

use news;

create table if not exists news_category (
       id int primary key,
       name varchar(1024)
)character set utf8;

create table if not exists news_journalism (
       id int primary key not null,
       title varchar(1024) not null default '',
       tag int references news_category(id),
       img varchar(128) default '',
       count int default 0,
       author varchar(128) default '',
       focal tinyint default 0,
       time int default 0
)character set utf8;

create table if not exists news_message (
       id int primary key references news_journalism(id),
       message text
)character set utf8;

create table if not exists news_advertisement(
       id int primary key auto_increment,
       name varchar(256) default '',
       url varchar(256) default '',
       content text default '',
       img varchar(256) default '',
       qrcode varchar(256) default ''
)character set utf8;

create table if not exists news_user (
       userid int primary key auto_increment,
       username varchar(256) unique,
       email varchar(128) unique,
       password char(32),
       register_time int default 0
)character set utf8;


