drop database laravelschoola; 

create database laravelschoola; 
use laravelschoola; 

create table schools (
	id int auto_increment,
    nameSchool varchar(255),
    primary key (idSchool)
); 

create table users (
	id int auto_increment,
    name varchar(50) not null, 
    surname varchar(50) not null, 
    email varchar(255) not null unique,
    email_verified_at timestamp, 
    password varchar(255) not null,
    school_id int,
    rememberToken varchar(255),
    created_at_User TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (id),
    foreign key (schoolUser) references schools(id)
); 

create table students (
	id int auto_increment,
    nameStudent varchar(50) not null, 
    surnameStudent varchar(50) not null, 
    emailStudent varchar(255) not null unique,
    classNumber int not null,
    className char(1) not null,
    school_id int,
    created_at_Student TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (id),
	foreign key (school_id) references schools(id)
    ); 

create table activities (
	id int auto_increment, 
    nameActivity varchar(255),
    user_id int,
    created_at_activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (id),
    foreign key (user_id) references users(id)
); 

create table attendance ( 
	id int auto_increment, 
    student_id int,
    activity_id int, 
    dateAttendance date,
    notes text,
    created_at_Attendance TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    primary key (id),
    foreign key (student_id) references students(id),
    foreign key (activity_id) references activities(id)
); 

use skola_test;
select * from users; 
    
delete from activities
where IDActivity >=1; 

alter table activities
modify created_at_activitiy TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

alter table students
change column nameStudnet nameStudent varchar(50) not null;

Alter table attendance
modify created_at_attendance TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

Alter table students
change column created_at_Students created_at_Student TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
    
Alter table activities
Change COLUMN created_at_activitiy created_at_activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP;

select * from students;

-- umetanje podataka --- 
Insert into Schools 
(nameSchool)
Values
('OŠ Ludina'),
('OŠ Popovača'), 
('OŠ Zorke Sever'); 

Select * from users ;

INSERT INTO students 
(nameStudent, surnameStudent, emailStudent, classNumber, className, schoolStudent)
VALUES
('Ana', 'Anić', 'anaanic@skole.hr', '5', 'a', '1'),
('Marko', 'Marić', 'markomaric@skole.hr', '6', 'b', '1'),
('Ivana', 'Kovač', 'ivanakovac@skole.hr', '7', 'a', '1'),
('Luka', 'Horvat', 'lukahorvat@skole.hr', '8', 'b', '1'),
('Petra', 'Perić', 'petraperic@skole.hr', '5', 'b', '1'),
('Matej', 'Matić', 'matejmatic@skole.hr', '6', 'a', '1'),
('Maja', 'Jurić', 'majajuric@skole.hr', '7', 'b', '1'),
('Nikola', 'Novak', 'nikolanovak@skole.hr', '8', 'a', '1'),
('Marija', 'Babić', 'marijababic@skole.hr', '5', 'a', '1'),
('Karlo', 'Krnić', 'karlokrnic@skole.hr', '6', 'b', '1'),
('Tanja', 'Tomić', 'tanjatomic@skole.hr', '7', 'a', '1'),
('Dario', 'Đukić', 'dariodjukic@skole.hr', '8', 'b', '1'),
('Lea', 'Lovrić', 'lealovric@skole.hr', '5', 'b', '1'),
('Filip', 'Filić', 'filipfilic@skole.hr', '6', 'a', '1'),
('Martina', 'Maričić', 'martinamari@skole.hr', '7', 'b', '1'),
('Ivica', 'Ivić', 'ivicaivic@skole.hr', '8', 'a', '1'),
('Anja', 'Arlović', 'anjarlovic@skole.hr', '5', 'a', '1'),
('Sara', 'Sarić', 'saras@skole.hr', '6', 'b', '1'),
('David', 'Dragić', 'daviddragic@skole.hr', '7', 'a', '1'),
('Ines', 'Ivančić', 'inesivancic@skole.hr', '8', 'b', '1');

INSERT INTO students 
(nameStudent, surnameStudent, emailStudent, classNumber, className, schoolStudent)
VALUES
('Ema', 'Ergić', 'emaergic@skole.hr', '5', 'a', '2'),
('Lovro', 'Lukić', 'lovrolukic@skole.hr', '6', 'b', '2'),
('Tea', 'Tomić', 'teatomic@skole.hr', '7', 'a', '2'),
('Andrej', 'Antić', 'andrejantic@skole.hr', '8', 'b', '2'),
('Marta', 'Mijić', 'martamijic@skole.hr', '5', 'b', '2'),
('Goran', 'Grgić', 'gorangrgic@skole.hr', '6', 'a', '2'),
('Tena', 'Tadić', 'tenatadic@skole.hr', '7', 'b', '2'),
('Ivan', 'Ivanić', 'ivanivanic@skole.hr', '8', 'a', '2'),
('Josip', 'Jurić', 'josipjuric@skole.hr', '5', 'a', '2'),
('Nina', 'Nikić', 'ninanikic@skole.hr', '6', 'b', '2');

use skola_test; 
INSERT INTO attendance 
(StudentId, ActivityId, dateAttendance, notes)
VALUES 
('5','3','2024-10-07','Bilješka 1'),
('7','2','2024-10-13','Bilješka 1'),
('10','2','2024-09-21','Bilješka 1'),
('15','2','2024-09-21','Bilješka 1'),
('5','2','2024-09-14',''),
('7','2','2024-09-14',''),
('10','2','2024-09-14',''),
('15','2','2024-09-14',''),
('14','2','2024-09-14',''),
('5','2','2024-09-7',''),
('10','2','2024-09-7','');

select ac.nameActivity, 
		att.dateAttendance as dateA, 
		st.nameStudent, 
        st.surnameStudent, 
        st.classNumber, 
        st.className
from activities as ac

join attendance as att on ac.idActivity = att.ActivityId 
join students as st on att.StudentId = st.idStudent
where ac.idActivity = 2
order by dateA asc; 

select * from students;

Use laravelschoola; 
drop table table_attendance; 
