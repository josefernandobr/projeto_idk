use idk;

CREATE TABLE assinatura (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Clientes_id INTEGER UNSIGNED NOT NULL,
  TipoAssnatura_id INTEGER UNSIGNED NOT NULL,
  FormaPagamentoId INTEGER UNSIGNED NOT NULL,
  DataInicio DATETIME NOT NULL,
  DataFim DATETIME NOT NULL,
  TotalPago FLOAT NOT NULL,
  NumParcelas INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id),
  INDEX assinatura_FKInde1(FormaPagamentoId),
  INDEX assinatura_FKIndex2(TipoAssnatura_id),
  INDEX assinatura_FKIndex3(Clientes_id)
);

CREATE TABLE Avaliacao (
  Clientes_id INTEGER UNSIGNED NOT NULL,
  conteudo_id INTEGER UNSIGNED NOT NULL,
  nota INTEGER UNSIGNED NOT NULL,
  DATAavaliacao DATE NOT NULL,
  PRIMARY KEY(Clientes_id, conteudo_id),
  INDEX Clientes_has_conteudo_FKIndex1(Clientes_id),
  INDEX Clientes_has_conteudo_FKIndex2(conteudo_id)
);

CREATE TABLE Clientes (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome CHAR(100) NOT NULL,
  email CHAR(100) NOT NULL,
  senha CHAR(255) NOT NULL,
  DataEntrada DATETIME NOT NULL,
  aniversario DATE NOT NULL,
  LinkPerfil CHAR(200) NOT NULL,
  pais CHAR(100) NOT NULL,
  foto CHAR(200) NOT NULL,
  cartao CHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE conteudo (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  TipoConteudo_id INTEGER UNSIGNED NOT NULL,
  nome CHAR(255) NOT NULL,
  artista CHAR(255) NOT NULL,
  genero CHAR(255) NOT NULL,
  duracao FLOAT NOT NULL,
  album_picture CHAR(255) NOT NULL,
  audio CHAR(255) NOT NULL,
  PRIMARY KEY(id),
  INDEX conteudo_FKIndex1(TipoConteudo_id)
);

CREATE TABLE FormaPagamento (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricao CHAR(100) NULL,
  PRIMARY KEY(id)
);

CREATE TABLE playlist (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Clientes_id INTEGER UNSIGNED NOT NULL,
  ConteudoId INTEGER UNSIGNED NULL,
  PRIMARY KEY(id),
  INDEX playlist_FKIndex1(Clientes_id)
);

CREATE TABLE playlist_has_conteudo (
  playlist_id INTEGER UNSIGNED NOT NULL,
  conteudo_id INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(playlist_id, conteudo_id),
  INDEX playlist_has_conteudo_FKIndex1(playlist_id),
  INDEX playlist_has_conteudo_FKIndex2(conteudo_id)
);

CREATE TABLE TipoAssnatura (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricao CHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE TipoConteudo (
  id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  descricao CHAR(100) NOT NULL,
  PRIMARY KEY(id)
);

INSERT into idk.clientes (nome,email,senha,DataEntrada,aniversario,LinkPerfil,pais,foto,cartao)
VALUES('Carlos da Silva','carlos@gmail.com',
'fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe',
'2023-02-14 03:38:24','1997-02-01','#','Brasil',
'https://drive.google.com/file/d/15dFFygl3RW2V35_FbM6hycYEgHYFBOWm/view?usp=share_link','11111111111111')

INSERT into idk.clientes (nome,email,senha,DataEntrada,aniversario,LinkPerfil,pais,foto,cartao)
VALUES('Maria dos Santos','santos@gmail.com',
'005e408f4905098f877eab7cf97ce9f0bc706994aa759eb4aa4653cf443e45fb9a0fa831986fabc0e6afce2c243f9605acc6fd3fd4e4a8fe0d16734301f1937f','2023-02-15 00:38:24','1996-02-01','#','Brasil',
'https://static01.nyt.com/newsgraphics/2017/12/26/ai-faces/8e890dbb781d60b011c9be1f9a169ed2583a0dda/quiz/quiz3.png',
'22222222222222')

INSERT into idk.clientes (nome,email,senha,DataEntrada,aniversario,LinkPerfil,pais,foto,cartao)
VALUES('Tânia Gonzalez','tania@gmail.com',
'62670d1e1eea06b6c975e12bc8a16131b278f6d7bcbe017b65f854c58476baba86c2082b259fd0c1310935b365dc40f609971b6810b065e528b0b60119e69f61','2023-02-16 00:38:24','2000-02-01','#','Paraguai',
'https://images.generated.photos/A8v-O3YsRx_jQl7qtu7_4RZLXLDjc6oqSCLRRYG_NgE/rs:fit:256:256/czM6Ly9pY29uczgu/Z3Bob3Rvcy1wcm9k/LnBob3Rvcy92M18w/MjUyNTYxLmpwZw.jpg',
'33333333333333')


insert into tipoconteudo(descricao)VALUES('música');
insert into tipoconteudo(descricao)VALUES('podcast');

insert into TipoAssnatura(descricao)VALUES('gratuito');
insert into TipoAssnatura(descricao)VALUES('pago'); 

insert into formapagamento(descricao)VALUES('cartão');
insert into formapagamento(descricao)VALUES('pix'); 

insert into playlist(Clientes_id, ConteudoId)VALUES(1,1); 
insert into playlist(Clientes_id, ConteudoId)VALUES(1,3); 
insert into playlist(Clientes_id, ConteudoId)VALUES(1,4); 

insert into playlist(Clientes_id, ConteudoId)VALUES(2,1); 
insert into playlist(Clientes_id, ConteudoId)VALUES(2,2); 

insert into playlist(Clientes_id, ConteudoId)VALUES(3,1); 
insert into playlist(Clientes_id, ConteudoId)VALUES(3,2); 
insert into playlist(Clientes_id, ConteudoId)VALUES(3,3); 
insert into playlist(Clientes_id, ConteudoId)VALUES(3,4); 

insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(1,1);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(1,3);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(1,4);

insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(2,1);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(2,2);

insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(3,1);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(3,2);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(3,3);
insert into playlist_has_conteudo (playlist_id, conteudo_id)VALUES(3,4);

insert into avaliacao (Clientes_id, conteudo_id,nota,DATAavaliacao)VALUES(1,2,2,'2022-01-01');
insert into avaliacao (Clientes_id, conteudo_id,nota,DATAavaliacao)VALUES(2,2,5,'2022-09-01');
insert into avaliacao (Clientes_id, conteudo_id,nota,DATAavaliacao)VALUES(3,3,4,'2022-10-01');

insert into conteudo (TipoConteudo_id,nome,artista,genero,duracao,album_picture,audio)VALUES(1,'Quando o sol chegar','Renanzin Pressão','piseiro',2.5,
'https://images-az.suamusica.com.br/DPib2jE0NSi20flgN7mgttFgt5s=/500x500/filters:format(webp)/507396/3714212/cd_cover.jpg',
'audio/quando_o_sol_chegar.mp3');

insert into conteudo (TipoConteudo_id,nome,artista,genero,duracao,album_picture,audio)VALUES(1,'Galinha Pintadinha','Galinha Pintadinha 2','infantil',2.5,
'https://images-americanas.b2w.io/produtos/01/00/item/111574/0/111574091_1GG.jpg',
'audio/galinha_pintadinha.mp3');

insert into conteudo (TipoConteudo_id,nome,artista,genero,duracao,album_picture,audio)VALUES(1,'Public Order','Feels Like Summer','alternativo',2.5,
'https://media.contentapi.ea.com/content/dam/ea/fifa/fifa-22/soundtrack/common/f22-soundtrack-fifa.jpg.adapt.crop16x9.320w.jpg',
'audio/feels_like_summer.mp3');

insert into assinatura  (Clientes_id,TipoAssnatura_id,FormaPagamentoId,DataInicio,DataFim,TotalPago,NumParcelas)
VALUES(1,1,1,'2021-01-01','9999-01-01',0,0);

insert into assinatura  (Clientes_id,TipoAssnatura_id,FormaPagamentoId,DataInicio,DataFim,TotalPago,NumParcelas)
VALUES(2,1,1,'2021-01-01','9999-01-01',0,0);

insert into assinatura  (Clientes_id,TipoAssnatura_id,FormaPagamentoId,DataInicio,DataFim,TotalPago,NumParcelas)
VALUES(2,1,1,'2021-01-01','9999-01-01',0,0);

drop table conteudo;

UPDATE clientes 
SET foto='https://static.generated.photos/vue-static/face-generator/landing/wall/20.jpg'
WHERE nome='Carlos da Silva';


select * from conteudo c  ;