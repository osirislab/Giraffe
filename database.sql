CREATE DATABASE giraffe;
USE giraffe;
CREATE TABLE sqli(id int NOT NULL AUTO_INCREMENT, username varchar(255), password char(32), PRIMARY KEY (id));
CREATE USER 'sqli'@'localhost' IDENTIFIED BY 'this_is_a_password';
GRANT ALL ON giraffe.* TO 'sqli'@'localhost';