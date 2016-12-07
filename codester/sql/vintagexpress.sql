CREATE TABLE Annuncio (

Codice INT(5) AUTO_INCREMENT,
Marca VARCHAR(45),
Modello CHAR(10) ,
Prezzo CHAR(10),
Posizione CHAR(20),
Image VARCHAR(200),
Imageb VARCHAR(200),
Description VARCHAR(1500),
PRIMARY KEY (Codice)
);


CREATE TABLE Utente (
Codice INT(5) AUTO_INCREMENT,
Nome VARCHAR(45),
Username VARCHAR(20) NOT NULL,
Password VARCHAR(20),
PRIMARY KEY(Codice)
);

INSERT INTO Annuncio (Marca, Modello, Prezzo, Posizione, Image, Imageb, Description) VALUES

('Fiat', 'Doblo', '50000', 'Napoli', 'img/Car/Fiat/Doblo.jpg', 'img/Car2/Fiat/Doblo.jpg', ''),
('Fiat', 'Ducato', '40000', 'Salerno', 'img/Car/Fiat/Ducato.jpg', 'img/Car2/Fiat/Ducato.jpg', ''),
('Fiat', 'Scudo', '70000', 'Roma', 'img/Car/Fiat/Scudo.jpg', 'img/Car2/Fiat/Scudo.jpg', '');

('Ford', 'Connect', '20000', 'Palermo', 'img/Car/', 'img/Car2/', '');
('Ford', 'Tourneo', '67000', 'Milano', 'img/Car/', 'img/Car2/', '');

('Mercedes', 'ClasseV', '50000', 'Avellino', 'img/Car/', 'img/Car2/', '');
('Mercedes', 'Citan', '40500', 'Benevento', 'img/Car/', 'img/Car2/', '');
('Mercedes', 'Sprinter', '70000', 'Nocera', 'img/Car/', 'img/Car2/', '');

('Peugeot', 'Boxer', '15000', 'Salerno', 'img/Car/', 'img/Car2/', '');
('Peugeot', 'MasterL3', '40000', 'Striano', 'img/Car/', 'img/Car2/', '');
('Peugeot', 'Partner', '23000', 'Sarno', 'img/Car/', 'img/Car2/', '');

('Renault', 'Expert', '32000', 'Viterbo', 'img/Car/', 'img/Car2/', '');
('Renault', 'Kangoo', '10000', 'Mazzara del Vallo', 'img/Car/', 'img/Car2/', '');
('Renault', 'Traffic', '23000', 'Benevento', 'img/Car/', 'img/Car2/', '');

('Volkswagen', 'Caddy', '40000', 'Torino', 'img/Car/', 'img/Car2/', '');
('Volkswagen', 'Crafter', '60000', 'Genova', 'img/Car/', 'img/Car2/', '');
('Volkswagen', 'T5', '21000', 'Bari', 'img/Car/', 'img/Car2/', '');



INSERT INTO Utente (Codice, Nome, Username, Password) VALUES

  ('12345', 'Salvatore', 'pelo', 'pelo');