CREATE TABLE ACCOUNTS (
    id int PRIMARY KEY NOT NULL,
    username varchar(255),
    password varchar(255),
    role varchar(100),
    uid int,
);

CREATE TABLE ADMINS (
    id int PRIMARY KEY NOT NULL,
    username varchar(255),
);

CREATE TABLE APPLIES (
    jid int ,
    uid int ,
    time TIMESTAMP,
    cv varchar(max),
    letter VARCHAR(max)
);

CREATE TABLE EMPLOYERS (
    id int PRIMARY key not null,
    name varchar (255),
    "location" varchar (255),
    workingtime varchar (255),
    quality varchar (255),
    ownproject varchar (255),
    prize varchar (255),
    email varchar (255),
    phone varchar (255),
    introduce varchar (255),
    logo varchar (255),
    active bit
);

CREATE TABLE JOBS (
    id int PRIMARY key not null,
    name varchar (255),
    salary varchar (255),
    reasons varchar (255),
    quality varchar (255),
    descriptions varchar (255),
    requirements varchar (255),
    createon varchar (255),
    status varchar (255),
    worktype varchar (255),
    EID varchar (255),
    ELOGO   varchar (255),
    ENAME varchar (255),
);

CREATE TABLE USERS (
    id int PRIMARY key not null,
    name varchar (255),
    introduce varchar (255),
    education varchar (255),
    experience varchar (255),
    skill varchar (255),
    ownproject varchar (255),
    email varchar (255),
    phone varchar (255),
    introduce varchar (255),
    avatar varchar (255),
    certificate varchar (255),
    prize varchar (255),
);

