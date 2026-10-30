# LAMP Stack Implementation on RHEL 10

## Project Overview
This project demonstrates the implementation of a LAMP Stack on Red Hat Enterprise Linux 10.

LAMP stands for:
- Linux – Red Hat Enterprise Linux 10
- Apache – Web Server
- MariaDB – Database Server
- PHP – Server-side scripting language

## Architecture

Browser → Apache → PHP → MariaDB → HTML Response

## Technologies Used
- Red Hat Enterprise Linux 10
- Apache HTTP Server
- PHP
- MariaDB
- HTML
- SQL
- Linux Firewall (firewalld)

## Project Features
- Apache web server installation and configuration
- PHP integration with Apache
- MariaDB database setup
- Dedicated database user
- PHP application connected to MariaDB
- Employee records displayed dynamically on a webpage

## Database Details
Database: lampdb

Table: employees

Sample records:
- Rahul Sharma – IT
- Priya Singh – HR
- Amit Verma – Finance

## Security Practices
- Dedicated database user
- No database root credentials in PHP
- Password placeholder used in public source code
- Firewall configured for HTTP access

## Author
Pawan Anil Mohite

GitHub: https://github.com/pawan820
