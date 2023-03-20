<?php

create database XYZ_Corp;
create table employees (
    `id` UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(500) NOT NULL,
    `age` varchar(500) NOT NULL,
    `salary` varchar(500) NOT NULL,
    `department_id` varchar(500) NOT NULL
);

create table departments (
    `id` UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(500) NOT NULL,
    `manager` varchar(500) NOT NULL
);

// Use the employees table to answer the following questions:

// a.Write a query to select all columns and rows from the employees table.

SELECT * FROM employees;

//b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

SELECT name, salary FROM employees WHERE salary > 50000;

//c. Write a query to calculate the average salary of all employees.

SELECT AVG(salary) AS Average Salary FROM employees;

//d. Write a query to count the number of employees who work in the "Marketing" department.

ELECT COUNT(*) AS Marketing Employees FROM employees, department WHERE department.name = 'Marketing';

//e. Write a query to update the salary column of the employee with an id of 1001 to 60000.

UPDATE employees SET salary = 60000 WHERE id BETWEEN 1001 TO 60000;

//f. Write a query to delete all employees whose salary is less than 30000.

DELETE FROM employees WHERE salary < 30000;



// Use the departments table to answer the following questions:

// a. Write a query to select all columns and rows from the departments table.

SELECT * FROM department;

// b. Write a query to select only the name and manager columns of the "Finance" department.

SELECT name FROM department WHERE manager = 'Finance';

// c. Write a query to calculate the total number of employees in each department.

SELECT count(*) AS total_employees_department FROM employees GROUP BY department;

// d. Write a query to insert a new department called "Research" with a manager named "John Doe".

 INSERT INTO department ('name', `manager`) values ('John Doe', 'Research');