select * from mysql.user;

select * from mysql.user;

CREATE USER 'cofre'@'localhost' IDENTIFIED BY 'gWU^RADkdaAN';
GRANT ALL PRIVILEGES ON * . * TO 'cofre'@'localhost';

create database ProjetoCofre;
show databases;

use ProjetoCofre;
create table device
(
id_device int auto_increment NOT NULL,
ip_device varchar (15) NOT NULL,
PRIMARY KEY (id_device)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

create table credential
(
id_credential int auto_increment NOT NULL,
FK_id_device int NOT null,
credential_name varchar(255),
credential_password varchar (255),
credential_comment varchar (255),
PRIMARY KEY (id_credential),
CONSTRAINT FK_id_device foreign key (FK_id_device) references device(id_device)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO device (ip_device) value ('127.0.0.2');

select * from device;

INSERT INTO credential (FK_id_device,credential_name,credential_password,credential_comment) value (1,'root','teste@123','comentario');

select * from credential;

select * from credential inner join device on credential.FK_id_device = device.id_device;



