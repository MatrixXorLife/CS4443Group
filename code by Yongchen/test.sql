DROP DATABASE IF EXISTS test;

CREATE DATABASE test;

USE test;

CREATE TABLE table1
(
   ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name varchar(128),
   amount int
);

