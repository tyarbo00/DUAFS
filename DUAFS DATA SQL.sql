/*
	DUAFS Test Data MySQL File
*/

USE DUAFS;

INSERT INTO user
VALUES
	(default,'jharde00','testpassword','jharde00@g.uafs.edu','James','D','Harden',1,0,0,0),
    (default,'wsmith01','testpassword','wsmith01@g.uafs.edu','Will','','Smith',1,0,0,0),
    (default,'djones00','testpassword','david.jones@uafs.edu','David','J','Jones',0,1,1,0),
    (default,'mharri00','testpassword','mike.harris@uafs.edu','Mike','S','Harris',0,1,0,0),
    (default,'kscott00','testpassword','kim.scott@uafs.edu','Kim','','Scott',0,0,1,0),
    (default,'gjames00','testpassword','admin@uafs.edu','Gray','M','James',0,0,0,1);
    
INSERT INTO college
VALUES
	(default,'Applied Science and Technology'),
    (default,'Business'),
    (default,'Communication, Languages, Arts, and Social Sciences'),
    (default,'Graduate Studies'),
    (default,'Health Sciences'),
    (default,'Science, Technology, Engineering, and Mathematics'),
    (default,'School of Education');
    
INSERT INTO department
VALUES
	(default,'Applied Science and Technology',1),
	(default,'Business',2),
    (default,'Art',3),
	(default,'Music',3),
    (default,'History',3),
    (default,'Dental Hygiene',5),
    (default,'Nursing',5),
    (default,'Biological Sciences',6),
	(default,'Computer and Information Sciences',6),
    (default,'Engineering',6),
    (default,'Mathematics',6),
    (default,'Physical Sciences',6),
    (default,'Mathematics',6),
    (default,'School of Education',7);
    
INSERT INTO program 
VALUES
	(default,'Animation Technology',TRUE,FALSE,1),
    (default,'Applied Science',TRUE,FALSE,1),
    (default,'Automotive Technology',FALSE,TRUE,1),
    (default,'Accounting',TRUE,FALSE,2),
    (default,'Marketing',TRUE,FALSE,2),
    (default,'English',TRUE,FALSE,3),
    (default,'History',TRUE,FALSE,3),
    (default,'General Studies',FALSE,TRUE,3),
    (default,'Dental Hygiene',TRUE,FALSE,5),
    (default,'Nursing',TRUE,FALSE,5),
    (default,'Radiography',FALSE,TRUE,5),
	(default,'Information Technology',TRUE,FALSE,6),
	(default,'Biology',TRUE,FALSE,6),
	(default,'Mathematics',TRUE,FALSE,6),
	(default,'Engineering',TRUE,FALSE,6),
	(default,'Elementary Education K-6',TRUE,FALSE,7),
    (default,'Middle Childhood Education 4-8',TRUE,FALSE,7);
    
INSERT INTO major
VALUES
	(4064,'Animation Technology',1),
    (4100,'Applied Science',2),
    (0578,'Business Administration',4),
    (2545,'English',6),
    (3576,'English with Teacher Licensure 7-12',6),
    (2565,'History',7),
    (3574,'History with Social Studies Teacher Licensure 7-12',7),
    (0005,'General Studies',8),
    (2062,'Dental Hygiene',9),
    (2018,'Nursing',10),
    (2040,'Radiography',11),
    (1054,'Computer Science',12),
    (3006,'Biology',13),
    (3565,'Biology with Life Science Teacher Licensure 7-12',13),
    (3063,'Mathematics',14),
    (3568,'Mathematics with Teacher Licensure 7-12',14),
    (0020,'Electrical Engineering',15),
    (0021,'Mechanical Engineering',15),
    (3554,'Elementary Education K-6',16),
    (3515,'Middle Childhood Education 4-8',17);
   
INSERT INTO minor
VALUES
	(1001,'Biology',13),
    (1030,'Applied Statistics',14),
    (4030,'General Technology - Automotive',3);
    
INSERT INTO advisor 
VALUES
	(default,3,2),
	(default,5,5);
    
    
    