-- Criando o banco de dados
CREATE DATABASE alertavisao;
-- Usando o banco de dados
USE alertavisao;

drop database alertavisao;

CREATE TABLE chamadosabertos(
    chamadosabertos INT PRIMARY KEY AUTO_INCREMENT ,
     chamado INT,
 categoria varchar(45) not null,
 datachamado varchar(45) not null,
  FOREIGN KEY (chamado) REFERENCES chamado(chamado)
);

-- Relação do chamado enviado com analise do chamado aberto
CREATE TABLE chamado(
  chamado INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(45) not null,
    sobrenome varchar(45) not null,
    telefone varchar(45) not null,
    email varchar(45) not null,
    categoria varchar(45) not null,
    descreveproblema varchar(45) not null
);

CREATE TABLE vendasrealizadas(
    vendasrealizadas INT AUTO_INCREMENT PRIMARY KEY,
    cartao int,
	categoriavenda varchar(45) not null,
	statusvendas varchar(45)  not null,
    FOREIGN KEY (cartao) REFERENCES cartao(cartao)
);



CREATE TABLE cartao(
    cartao INT AUTO_INCREMENT PRIMARY KEY,
	numeroCartao  varchar(45)  not null,
	dataValidade varchar(45)  not null,
    codSeguranca  varchar(45)  not null,
    nomeTitular  varchar(45)  not null
    );

create table administrador(
 administrador INT AUTO_INCREMENT PRIMARY KEY,
    vendasrealizda
int,
	categoriavenda varchar(45) not null,
	statusvendas varchar(45)  not null,
    FOREIGN KEY (cartao) REFERENCES cartao(cartao)
);


-- usuario para ambas as jornadas
create table Usuario(
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    login varchar (100) not null,
    senha varchar(100) not  null,
    tipo varchar(20) not null
   )Engine=InnoDB;
   
-- Só criar duas tabelas caso os dados de pessoa Assistida seja diferente da de pessoa Acompanhante
create table Assistida(
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    sobrenome varchar(100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    codAcompanhante int (20) not null
	)Engine=InnoDB;
 
create table Acompanhante(  
	codigo int not null auto_increment primary key, 
	nome varchar (100) not null,
    sobrenome varchar(100) not null,
    telefone varchar(100) not null,
    email varchar(50) not null,
    login varchar (100) not null,
    senha varchar(100) not  null
)Engine=InnoDB;
 
 
alter table Assistida add constraint aacompanhante foreign key(codAcompanhante)
references Acompanhante(codigo);

select * from Usuario;
select * from chamadosabertos;
select * from chamado;
select * from vendasrealizadas;
select * from cartao;
select * from Acompanhante;
select * from Assistida;
select * from Usuario;

 