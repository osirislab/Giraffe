CREATE DATABASE giraffe;
USE giraffe;
CREATE TABLE sqli(id int NOT NULL AUTO_INCREMENT, username varchar(255), password char(32), profile text, PRIMARY KEY (id));
CREATE USER 'sqli'@'localhost' IDENTIFIED BY 'this_is_a_password';
GRANT ALL ON giraffe.* TO 'sqli'@'localhost';
INSERT INTO sqli (username, password, profile) VALUES ('Acid_Burn', md5('love'), "God gave men brains larger than dogs so they wouldn't hump women's legs at cocktail parties.' - Ruth Libby.");
INSERT INTO sqli (username, password, profile) VALUES ('Zero_Cool', md5('sex'), "Why would you think I was black?");
INSERT INTO sqli (username, password, profile) VALUES ('Crash_Overide', md5('secret'), "Anything else, mom? You want me to mow the lawn? Oops! I forgot, New York, No grass.");