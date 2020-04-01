create database gildamodas; 

use gildamodas; 


create table administrador ( 
id_admin tinyint not null auto_increment,
login varchar(50) not null,
senha varchar(50) not null,
primary key (id_admin)
);
 
create table cadastrar ( 
id_cadastrar tinyint not null auto_increment, 
nome varchar(50) not null,  
email varchar(50),
fone varchar(50) not null, 
datadenascimento date not null,
primary key (id_cadastrar)

); 



insert into administrador (login,senha) 
values ('jgfv','2794');   

alter table cadastrar 
add column email varchar(15) after nome;



select * from administrador; 
select * from cadastrar; 

delete from cadastrar 
where id_cadastrar = 5;





