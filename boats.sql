create database boats;
use boats;

create table boats(
	id int auto_increment not null,
    nameBoats varchar(50) not null,
    price smallint not null,
    cidade varchar(50),
    boatSize int not null,
    boatDescription varchar(200) not null,
    primary key(id)
);