/*
	DUAFS MySQL File
*/

CREATE DATABASE DUAFS;

USE DUAFS;

CREATE TABLE user (
    	user_id INT NOT NULL AUTO_INCREMENT,
    	username VARCHAR(255) NOT NULL,
    	password VARCHAR(255) NOT NULL,
    	email VARCHAR(255) NOT NULL,
	first_name VARCHAR(255) NOT NULL,
	middle_initial VARCHAR(255) DEFAULT '',
	last_name VARCHAR(255) NOT NULL,
    	is_student BOOLEAN NOT NULL DEFAULT FALSE,
    	is_professor BOOLEAN NOT NULL DEFAULT FALSE,
    	is_advisor BOOLEAN NOT NULL DEFAULT FALSE,
	is_administrator BOOLEAN NOT NULL DEFAULT FALSE,
    	PRIMARY KEY (user_id)
);

CREATE TABLE college (
	college_id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	PRIMARY KEY (college_id)
);

CREATE TABLE department (
	department_id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	college_id INT NOT NULL,
	PRIMARY KEY (department_id),
	FOREIGN KEY (college_id) REFERENCES college(college_id)
);

CREATE TABLE program (
	program_id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	college_id INT NOT NULL,
	PRIMARY KEY (program_id),
	FOREIGN KEY (college_id) REFERENCES college(college_id)
);

CREATE TABLE major (
	major_code VARCHAR(10) NOT NULL UNIQUE,
	title VARCHAR(255) NOT NULL,
	program_id INT NOT NULL,
	PRIMARY KEY (major_code),
	FOREIGN KEY (program_id) REFERENCES program(program_id)
);

CREATE TABLE minor (
	minor_code VARCHAR(10) NOT NULL UNIQUE,
	title VARCHAR(255) NOT NULL,
	program_id INT NOT NULL,
	PRIMARY KEY (minor_code),
	FOREIGN KEY (program_id) REFERENCES program(program_id)
);

CREATE TABLE advisor (
	advisor_id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	college_id INT NOT NULL,
	PRIMARY KEY (advisor_id),
	FOREIGN KEY (user_id) REFERENCES user(user_id),
	FOREIGN KEY (college_id) REFERENCES college(college_id)
);

CREATE TABLE professor (
	professor_id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	department_id INT NOT NULL,
	PRIMARY KEY (professor_id),
	FOREIGN KEY (user_id) REFERENCES user(user_id),
	FOREIGN KEY (department_id) REFERENCES department(department_id)
);

CREATE TABLE student (
	student_id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	is_undergraduate BOOLEAN NOT NULL DEFAULT TRUE,
	major_code VARCHAR(10),
	minor_code VARCHAR(10),
	advisor_id INT NOT NULL,
	PRIMARY KEY (student_id),
	FOREIGN KEY (user_id) REFERENCES user(user_id),
	FOREIGN KEY (major_code) REFERENCES major(major_code),
	FOREIGN KEY (minor_code) REFERENCES minor(minor_code),
	FOREIGN KEY (advisor_id) REFERENCES advisor(advisor_id)
);

CREATE TABLE building (
	building_id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	location VARCHAR(255),
	PRIMARY KEY (building_id)
);

CREATE TABLE room (
	room_id INT NOT NULL AUTO_INCREMENT,
	room_code VARCHAR(10) NOT NULL,
	building_id INT NOT NULL,
	num_seats INT NOT NULL,
	PRIMARY KEY (room_id),
	FOREIGN KEY (building_id) REFERENCES building(building_id)
);

CREATE TABLE course (
	course_id INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	description TEXT NOT NULL DEFAULT 'Description not found',
	credit_hours INT NOT NULL,
	department_id INT NOT NULL,
	PRIMARY KEY (course_id),
	FOREIGN KEY (department_id) REFERENCES department(department_id)
);

CREATE TABLE section (
	section_id INT NOT NULL AUTO_INCREMENT,
	start_time TIME NOT NULL,
	end_time TIME NOT NULL,
	days VARCHAR(20) NOT NULL,
	semester VARCHAR (20) NOT NULL,
	start_date DATE NOT NULL,
	end_date DATE NOT NULL,
	room_id INT NOT NULL,
	professor_id INT NOT NULL,
	course_id INT NOT NULL,
	PRIMARY KEY (section_id),
	FOREIGN KEY (room_id) REFERENCES room(room_id),
	FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
	FOREIGN KEY (course_id) REFERENCES course(course_id)
);

CREATE TABLE enrollment (
	enrollment_id INT NOT NULL AUTO_INCREMENT,
	enrollment_date DATE NOT NULL,
	enrollment_time TIME NOT NULL,
	student_id INT NOT NULL,
	section_id INT NOT NULL,
	grade VARCHAR(1),
	PRIMARY KEY (enrollment_id),
	FOREIGN KEY (student_id) REFERENCES student(student_id),
	FOREIGN KEY (section_id) REFERENCES section (section_id)
);

CREATE TABLE meeting (
	meeting_id INT NOT NULL AUTO_INCREMENT,
    	meeting_date DATE NOT NULL,
	start_time TIME NOT NULL,
	meeting_type VARCHAR(50) NOT NULL,
    	professor_id INT, 
    	advisor_id INT,
    	student_id INT,
    	room_id INT NOT NULL, 
    	PRIMARY KEY (meeting_id),
    	FOREIGN KEY (student_id) REFERENCES student(student_id),
    	FOREIGN KEY (professor_id) REFERENCES professor(professor_id),
    	FOREIGN KEY (advisor_id) REFERENCES advisor(advisor_id)
);
