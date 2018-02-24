create table tasks(
	task_id INT AUTO_INCREMENT,
	subject varchar(55),
	task_desc LONGTEXT,
	completed boolean,
	created TIMESTAMP,
	PRIMARY KEY (task_id)
);