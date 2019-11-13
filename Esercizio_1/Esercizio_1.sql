drop table if exists frutta;
drop table if exists verdura;
drop table if exists stagione;

create table stagione (
nome character(20) primary key
) engine=InnoDB;

create table frutta (
nome character(20),
stagione character(20) primary key,
foreign key (stagione) references stagione(nome)
) engine=InnoDB;

create table verdura (
nome character(20),
stagione character(20) primary key,
foreign key (stagione) references stagione(nome)
) engine=InnoDB;

insert into stagione (nome) values ('autunno');
insert into stagione (nome) values ('inverno');
insert into stagione (nome) values ('estate');
insert into stagione (nome) values ('primavera');

insert into frutta (nome, stagione) values ('mela', 'autunno');
insert into frutta (nome, stagione) values ('pera', 'primavera');
insert into frutta (nome, stagione) values ('anguria', 'estate');
insert into frutta (nome, stagione) values ('mandarini', 'inverno');

insert into verdura (nome, stagione) values ('carota', 'autunno');
insert into verdura (nome, stagione) values ('cicoria', 'inverno');
insert into verdura (nome, stagione) values ('asparagi', 'primavera');
insert into verdura (nome, stagione) values ('zucchine', 'estate');

select nome, stagione
from frutta
where stagione like 'inverno';

select nome, stagione
from verdura
where stagione like 'estate';