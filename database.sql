CREATE DATABASE lampdb;

USE lampdb;

CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    department VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO employees (name, department, email)
VALUES
('Rahul Sharma', 'IT', 'rahul@example.com'),
('Priya Singh', 'HR', 'priya@example.com'),
('Amit Verma', 'Finance', 'amit@example.com');

SELECT * FROM employees;
