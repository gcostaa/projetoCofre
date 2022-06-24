create database cofre;
show databases;

create table device
(
id_device int primary key auto_increment,
ip_device varchar (15)
);

create table credential
(
id_credential int primary key auto_increment,
id_device 
);