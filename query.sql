/*
 Creating Database
*/

create database odd;
use odd;
create table Admin(
 user_id varchar(10),
 pwd varchar(10),
 primary key(user_id)
);
alter table Admin Engine=InnoDB;

-- Inserting data into admin table

insert into Admin
values('ankit','krati');

-- Creating Table of Type Teacher
CREATE TABLE IF NOT EXISTS Teachers(
 user_id varchar(20),
 pwd varchar(20) NOT NULL,
 fname varchar(20) NOT NULL,
 mname varchar(20) Default NULL,
 lname varchar(20) Default NULL,
 email varchar(30) NOT NULL,
 mob varchar(11) NOT NULL,
 address_line1 varchar(50) NOT NULL,
 address_line2 varchar(50) DEFAULT NULL,
 address_line3 varchar(50) DEFAULT NULL,
 subject varchar(20) NOT NULL,
 primary key(user_id)
);
alter table Admin Engine=InnoDB;
-- Inserting data into Teachers Table

insert into Teachers
values('Dinesh','dinesh123','Dinesh','','','dinesh@mnnit.ac.in','9140552958','01 Colony MNNIT','','','Operating System');
insert into Teachers
values('Rupesh','rupesh123','Rupesh','','','rupesh@mnnit.ac.in','9140552958','02 Colony MNNIT','','','Algorithm');
insert into Teachers
values('Dharmendra','dharmendra123','Dharmendra','Kumar','Yadav','dky@mnnit.ac.in','8858352452','03 Colony MNNIT','','','OBM');
insert into Teachers
values('Madan','madan123','Madan','Mohan','Gore','madan@mnnit.ac.in','9455155469','04 Colony MNNIT','','','C Programming');
insert into Teachers
values('Rajesh','rajesh123','Rajesh','','Tripathi','rajesh@mnnit.ac.in','8009423756','05 Colony MNNIT','','','DCO');


-- Creating Table of type Courses

create table if not exists Courses(
  course varchar(20),
  branch varchar(20),
  semester int,
  subject varchar(20),
  teacher varchar(20),
);

alter table Courses Engine=InnoDB;
alter table Courses add foreign key(teacher) references Teachers(user_id);

-- inserting data into Courses
insert into Courses
values('MCA','MCA',3,'Algorithm','Rupesh');
insert into Courses
values('MCA','MCA',3,'OBM','Dharmendra');
insert into Courses
values('MCA','MCA',3,'Operating System','Dinesh');
