create database if not exists loja character set utf8mb4 collate utf8mb4_general_ci;
use loja;

create table if not exists prices (
	category enum('camiseta','caneca','copo') not null,
    value float not null,
    
    primary key(category)
);

create table if not exists products (
	id int unsigned not null auto_increment,
    title varchar(255) not null,
    description varchar(511) not null,
    category enum('camiseta','caneca','copo') not null,
    
    foreign key (category) references prices(category),
    primary key(id)
);