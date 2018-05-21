CREATE DATABASE testefc;
USE testefc;
CREATE TABLE familia(id INT(6) AUTO_INCREMENT,nome VARCHAR(20) NOT NULL,quantidade_membros INT(4),PRIMARY KEY(id));
CREATE TABLE guerra(id INT(6) AUTO_INCREMENT,nome VARCHAR(20) NOT NULL,inicio DATE NOT NULL,fim DATE,PRIMARY KEY(id));
CREATE TABLE participa(id INT(6) AUTO_INCREMENT,disputa INT(6) NOT NULL,desafiadora INT(6) NOT NULL,desafiada INT(6) NOT NULL,vencedora INT(6),FOREIGN KEY desafiadora REFERENCES familia(id),FOREIGN KEY desafiada REFERENCES familia(id),FOREIGN KEY vencedora REFERENCES familia(id),FOREIGN KEY disputa REFERENCES guerra(id),PRIMARY KEY(id));

INSERT INTO familia(nome,quantidade_membros) VALUES('Adans',5);
INSERT INTO familia(nome,quantidade_membros) VALUES('abc',3);
INSERT INTO familia(nome,quantidade_membros) VALUES('Dorremi',7);

INSERT INTO guerra(nome,inicio,fim) VALUES('duas rosas','1900-04-02','1902-04-02');
INSERT INTO guerra(nome,inicio,fim) VALUES('pao de queijo','1998-05-12','2001-04-02');
INSERT INTO guerra(nome,inicio,fim) VALUES('batata','2009-12-02','2012-04-02');

INSERT INTO participa(disputa,desafiadora,desafiada,vencedora) VALUES(1,1,2,1);
INSERT INTO participa(disputa,desafiadora,desafiada,vencedora) VALUES(2,2,3,1);
INSERT INTO participa(disputa,desafiadora,desafiada,vencedora) VALUES(3,3,1,3);