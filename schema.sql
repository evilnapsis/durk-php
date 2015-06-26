create database hellodurk;
use hellodurk;

CREATE TABLE client (
id int not null auto_increment primary key,
name varchar(100),
lastname varchar(100),
address varchar(500),
phone varchar(20),
email varchar(100),
created_at datetime
);

CREATE TABLE category (
id int not null auto_increment primary key,
name varchar(100),
created_at datetime
);

CREATE TABLE post (
id int not null auto_increment primary key,
title varchar(100),
content varchar(1000),
category_id int,
created_at datetime
);

