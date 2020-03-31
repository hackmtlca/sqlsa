DROP DATABASE IF EXISTS sqlsa;
CREATE DATABASE sqlsa;

USE sqlsa;

CREATE TABLE users (
	id  INTEGER PRIMARY KEY AUTO_INCREMENT,
	username    TEXT,
	password    TEXT
);

INSERT INTO users (username, password) VALUES ("president", "3ec2f8e72f36a0dc3de05d234d96ef21");
INSERT INTO users (username, password) VALUES ("vice-president", "faf400675a6c121cbf19f64092e2db87");
INSERT INTO users (username, password) VALUES ("secretary", "847ff6732db8d4cd142384d476c2d93b");