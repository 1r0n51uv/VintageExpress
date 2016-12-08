CREATE TABLE Utente (
Id INT(5) AUTO_INCREMENT,
Nome VARCHAR(45),
Username VARCHAR(20) NOT NULL,
Password VARCHAR(20),
PRIMARY KEY(Id)
);

CREATE TABLE Annuncio (
Codice INT(5) AUTO_INCREMENT,
Marca VARCHAR(45),
Modello CHAR(10) ,
Prezzo CHAR(10),
Posizione CHAR(20),
Image VARCHAR(200),
Imageb VARCHAR(200),
Description VARCHAR(1500),
Id INT(5),
PRIMARY KEY (Codice),
FOREIGN KEY (Id) REFERENCES Utente(Id)
);

INSERT INTO Utente (Nome, Username, Password) VALUES
('Salvatore', 'pelo', 'pelo');

INSERT INTO Annuncio (Marca, Modello, Prezzo, Posizione, Image, Imageb, Description, Id) VALUES

('Fiat', 'Doblo', '50000', 'Napoli', 'img/Car/Fiat/Doblo.jpg', 'img/Car2/Fiat/Doblo.jpg', '', '1'),
('Fiat', 'Ducato', '40000', 'Salerno', 'img/Car/Fiat/Ducato.jpg', 'img/Car2/Fiat/Ducato.jpg', '', '1'),
('Fiat', 'Scudo', '70000', 'Roma', 'img/Car/Fiat/Scudo.jpg', 'img/Car2/Fiat/Scudo.jpg', '', '1'),

('Ford', 'Connect', '20000', 'Palermo', 'img/Car/Ford/Connect.jpg', 'img/Car2/Ford/Connect.jpg', '', '1'),
('Ford', 'Tourneo', '67000', 'Milano', 'img/Car/Ford/Tourneo.jpg', 'img/Car2/Ford/Tourneo.jpg', '', '1'),

('Mercedes', 'ClasseV', '50000', 'Avellino', 'img/Car/Mercedes/Citan.jpg', 'img/Car2/Mercedes/Citan.jpg', '', '1'),
('Mercedes', 'Citan', '40500', 'Benevento', 'img/Car/Mercedes/ClasseV.jpg', 'img/Car2/Mercedes/ClasseV.jpg', '', '1'),
('Mercedes', 'Sprinter', '70000', 'Nocera', 'img/Car/Mercedes/Sprinter.jpg', 'img/Car2/Mercedes/Sprinter.jpg', '', '1'),

('Peugeot', 'Boxer', '15000', 'Salerno', 'img/Car/Peugeot/Boxer.jpg', 'img/Car2/Peugeot/Boxer.jpg', '', '1'),
('Peugeot', 'MasterL3', '40000', 'Striano', 'img/Car/Peugeot/MasterL3.jpg', 'img/Car2/Peugeot/MasterL3.jpg', '', '1'),
('Peugeot', 'Partner', '23000', 'Sarno', 'img/Car/Peugeot/Partner.jpg', 'img/Car2/Peugeot/Partner.jpg', '', '1'),

('Renault', 'Expert', '32000', 'Viterbo', 'img/Car/Renault/Expert.jpg', 'img/Car2/Renault/Expert.jpg', '', '1'),
('Renault', 'Kangoo', '10000', 'Mazzara del Vallo', 'img/Car/Renault/Kangoo.jpg', 'img/Car2/Renault/Kangoo.jpg', '', '1'),
('Renault', 'Traffic', '23000', 'Benevento', 'img/Car/Renault/Traffic.jpg', 'img/Car2/Renault/Traffic.jpg', '', '1'),

('Volkswagen', 'Caddy', '40000', 'Torino', 'img/Car/Volkswagen/Wcaddy.jpg', 'img/Car2/Volkswagen/Wcaddy.jpg', '', '1'),
('Volkswagen', 'Crafter', '60000', 'Genova', 'img/Car/Volkswagen/Wcrafter.jpg', 'img/Car2/Volkswagen/Wcrafter.jpg', '', '1'),
('Volkswagen', 'T5', '21000', 'Bari', 'img/Car/Volkswagen/Wt5.jpg', 'img/Car2/Volkswagen/Wt5.jpg', '', '1');
