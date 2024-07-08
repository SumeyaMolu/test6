-- create database

DROP DATABASE IF EXISTS test6 ;
CREATE DATABASE IF NOT EXISTS test6;
USE test6;

-- create table

DROP TABLE IF EXISTS deliveries;
CREATE TABLE IF NOT EXISTS deliveries(
    userId bigint(11) NOT NULL AUTO_INCREMENT,
    fname varchar(50) NOT NULL DEFAULT '',
    lname varchar(50) NOT  NULL DEFAULT '',
    Telno varchar(50) NOT NULL DEFAULT '',
    created bigint(10) NOT NULL DEFAULT 0,
    updated bigint(10) NOT NULL DEFAULT 0,
    PRIMARY KEY(userId)

);