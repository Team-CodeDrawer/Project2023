create database CV;
use CV;
create table PI(
Sname text,
Email text,
PhoneNo bigint(20),
Address text,
DOB date,
Gender varchar(10),
Nationality varchar(20),
LanguageKnown text
);
INSERT INTO PI VALUES('Ashutosh Kumar','ashu1234@gmail.com',8899889988,'Bihar','2002-09-14','Male','Indian','Hindi and English');
SELECT * FROM PI;