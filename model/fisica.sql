create database fisica1;

	use fisica1;

create table magnitud(
    id_magnitud smallint not null auto_increment,
    magnitud varchar(2) not null,
    constraint PKMagnitud primary key (id_magnitud)
)ENGINE=InnoDB;

insert into magnitud(magnitud) values('1');
