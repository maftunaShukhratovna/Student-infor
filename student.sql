CREATE DATABASE STUDENTS;

USE STUDENTS;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    fakultet VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL
);