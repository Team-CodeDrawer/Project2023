create database Project;
use Project;
CREATE TABLE register(
roles text, 
Namee text, 
Email text, 
Uname text, 
Pass  text
);
select * from register;
select * from register where Email = 'rashmi12@gmail.com';



ALTER TABLE register    
MODIFY Email varchar(50); 
alter table register add unique(Email);
truncate table register;

create table feedback(
email text,
feedback text
);
select * from feedback;