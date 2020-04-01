CREATE DATABASE mvc CHARACTER SET utf8 COLLATE utf8_general_ci;

USE mvc;

CREATE TABLE usuario (
id_user BIGINT(20)UNSIGNED AUTO_INCREMENT NOT NULL ,
nome VARCHAR(200) NOT NULL ,
login VARCHAR(200) NOT NULL ,
senha VARCHAR(200) NOT NULL ,
email VARCHAR(200) NOT NULL ,
PRIMARY KEY (id_user) ) ENGINE = InnoDB;

CREATE TABLE imagens (
 id_imagem BIGINT(20) UNSIGNED AUTO_INCREMENT NOT NULL ,
 src VARCHAR(200) NOT NULL ,
 title VARCHAR(200) NOT NULL ,
 alt VARCHAR(200) NOT NULL ,
 descricao VARCHAR(200) NOT NULL ,
 PRIMARY KEY (id_imagem) ) ENGINE = InnoDB;


create table news(
    id_news BIGINT(20) UNSIGNED AUTO_INCREMENT not null,
    title varchar(200) not null,
    text varchar(5000) not null,
    primary key (id_news)
) ENGINE = InnoDB;

create table news_imagens (
    id_news bigint(20) UNSIGNED not null,
    id_imagem bigint(20) UNSIGNED not null,
    PRIMARY KEY (id_news, id_imagem),
    foreign key (id_news) references news(id_news),
    foreign key (id_imagem) references imagens(id_imagem)
) ENGINE = InnoDB;


-- INSERTS
--INSERINDO IMAGENS
INSERT INTO imagens(src,title,alt,descricao)
values('gremio1.jpeg','Gremio Foto','Gremio Foto','Gremio Foto');

INSERT INTO imagens(src,title,alt,descricao)
values('gremio2.jpeg','Gremio Foto','Gremio Foto','Gremio Foto');

INSERT INTO imagens(src,title,alt,descricao)
values('gremio3.jpeg','Gremio Foto','Gremio Foto','Gremio Foto');

INSERT INTO imagens(src,title,alt,descricao)
values('gremio4.jpg','Gremio Foto','Gremio Foto','Gremio Foto');

INSERT INTO imagens(src,title,alt,descricao)
values('gremio5.jpg','Gremio Foto','Gremio Foto','Gremio Foto');


-- INSERINDO NOTÍCIAS
INSERT INTO news(title,text) values('Grêmio 0x4 Coritiba', 'A cabeça de todos os gremistas está inchada na noite desta quarta-feira. Mais ainda do técnico Roger Machado e dos jogadores. O treinador gremista chamou a responsabilidade pela goleada sofrida para o Coritiba, no Couto Pereira, e admitiu que errou na hora de pensar na partida. Além disso, afirmou não conseguir "explicar com coerência" o resultado de 4 a 0 e todos os gols sofrdos em 17 minutos no primeiro tempo.');
INSERT INTO news(title,text) values('Grêmio Contrata', 'A cabeça de todos os gremistas está inchada na noite desta quarta-feira. Mais ainda do técnico Roger Machado e dos jogadores. O treinador gremista chamou a responsabilidade pela goleada sofrida para o Coritiba, no Couto Pereira, e admitiu que errou na hora de pensar na partida. Além disso, afirmou não conseguir "explicar com coerência" o resultado de 4 a 0 e todos os gols sofrdos em 17 minutos no primeiro tempo.');
INSERT INTO news(title,text) values('Grêmio troca treinador','Novo treinador é Renato Portalupi (Renato Gaúcho)');
--INSERINDO IMAGEM PARA NOTÍCIA
INSERT INTO news_imagens(id_news, id_imagem) values(2,3);
INSERT INTO news_imagens(id_news, id_imagem) values(2,5);
INSERT INTO news_imagens(id_news, id_imagem) values(1,4);
INSERT INTO news_imagens(id_news, id_imagem) values(1,2);

--INSERINDO USUARIO
INSERT INTO usuario(nome,login,email,senha)
values('Gill','g1ll','gillvelleda@gmail.com','33bf1fbf2067d5f449532c5bfe7dbaa0');

SELECT * FROM news;

SELECT * FROM usuario;

SELECT * FROM imagens;

SELECT i.* FROM imagens as i WHERE i.id_imagem IN 
(SELECT ni.id_imagem FROM news_imagens as ni WHERE ni.id_news = 1);

SELECT imagens.*,news.* FROM news_imagens INNER JOIN  imagens
    ON imagens.id_imagem = news_imagens.id_imagem
    INNER JOIN news ON news.id_news = news_imagens.id_news WHERE news.id_news = 2;
1;

SELECT count(ni.id_news) FROM news_imagens as ni WHERE ni.id_news = 1;

SELECT * FROM news_imagens;

SELECT * FROM usuario;
--DROP DATABASE mvc;