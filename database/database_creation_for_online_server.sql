/*
    ! IMPORTANT ! : This is only for testing and team work, the real one will use
                    database_creation.sql file.
                    
    NOTE: This is the same as database_creation.sql only change the database name
          since we are using a free remote database, we dont have access to create
          new database and also some wierd sql syntax issue near 'groups' word, i
          think the syntax issue is related to an old version database that is being
          used by the remote server.
*/

create database if not exists `cs_departement`;

use `cs_departement`;

create table if not exists users (
    id int primary key not null AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password varchar(255)
);


create table if not exists specialities (
    id int primary key not null AUTO_INCREMENT,
    specaility_name varchar(255)
);

create table if not exists acadimic_levels (
    id int primary key not null AUTO_INCREMENT,
    speciality_id int references specialities(id),
    level int not null
);

create table if not exists `groups` (
    id int primary key not null AUTO_INCREMENT,
    group_number int not null
);

create table if not exists students (
    id int primary key not null AUTO_INCREMENT,
    user_id int references users(id),
    acadimic_level_id int references acadimic_levels(id),
    group_id int references `groups`(id)
);

create table if not exists teachers (
    id int primary key not null AUTO_INCREMENT,
    user_id int references users(id)
);

create table if not exists subjects (
    id int primary key not null AUTO_INCREMENT,
    subject_name varchar(255) not null
);

create table if not exists resources (
    id int primary key not null AUTO_INCREMENT,
    resource_type varchar(255) not null, /* { room, lab, lecture_hall, computer } */
	resource_number int not null
);

create table if not exists schedules (
    id int primary key not null AUTO_INCREMENT,
    class_room_id int references resources(id),
    subject_id int references subjects(id),
    teacher_id int references teachers(id),
    group_id int references `groups`(id),
    /* FIXME: We may need to change start_at and end_at type. */
    start_at varchar(5),
    end_at varchar(5)
);

create table if not exists administraters (
    id int primary key not null AUTO_INCREMENT,
    user_id int references users(id)
);