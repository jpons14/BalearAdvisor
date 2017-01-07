DROP TABLE IF EXISTS comentaris;
CREATE TABLE comentaris (
  id          INT PRIMARY KEY AUTO_INCREMENT,
  usuari      VARCHAR(100),
  establiment VARCHAR(100),
  `text`      TEXT,
  `data`      VARCHAR(50),
  `hora`      VARCHAR(50)
);
INSERT INTO comentaris VALUES (NULL, 'mariaarbona45@gmail.com', 'Celler Pagès',
                               'Es todo excelente, tanto el trato del servicio, como la comida que es muy buena, especialmente las paellas, que están de infarto. Y los precios están bien, son normales.',
                               '2016-10-01', '12:33:15');

DROP TABLE IF EXISTS usuaris;
CREATE TABLE usuaris (
  id       INT PRIMARY KEY AUTO_INCREMENT,
  nom      VARCHAR(100),
  email    VARCHAR(150),
  password VARCHAR(100)
);


DROP TABLE IF EXISTS establiments;
CREATE TABLE establiments (
  id             INT PRIMARY KEY AUTO_INCREMENT,
  nom            VARCHAR(100),
  descripcio_cat TEXT,
  descripcio_esp TEXT,
  horari_cat     VARCHAR(200),
  horari_esp     VARCHAR(200),
  poblacio       VARCHAR(100),
  adreca         VARCHAR(200),
  telefon        VARCHAR(60),
  web            VARCHAR(100),
  preu           VARCHAR(100),
  tipus_cuina    VARCHAR(100)
);

ALTER TABLE `establiments`
  COLLATE utf8_general_ci;

DROP TABLE IF EXISTS tipus_cuina;
CREATE TABLE tipus_cuina (
  id  INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(100)
);

INSERT INTO establiments VALUES (NULL, "Racó de la Bona Cuina",
                                       "Racó de la Bona Cuina és un restaurant agradable i de tracte familiar on poder gaudir d'uns arrossos fantàstics i uns menús diaris molt elaborats segons mercat. Als matins, ofereixen uns esmorzars molt complets a molt bon preu, i per les tardes posen a la teva disposició la seva terrassa al costat de la Plaça d'Espanya on poder prendre uns gelats, un te o refrescos, i atenció, totes les begudes van acompanyades d'una tapa diferent que el xef prepara amb afecte per als seus clients. Disposen de tot això en un ambient familiar i agradable on el lema corporatiu és "la qualitat NO està renyida amb el preu" i la seva màxima, sempre cuinar amb afecte.",
                                       "Racó de la Bona Cuina es una restaurante agradable y de trato familiar donde poder disfrutar de unos arroces estupendos y unos menús diarios muy elaborados según mercado. Por las mañanas, ofrecen unos desayunos muy completos a muy buen precio, y por las tardes ponen a tu disposición su terraza al lado de la Plaza de España donde poder tomar unos helados, un té o refrescos, y atención, todas las bebidas van acompañadas de una tapa diferente que el chef prepara con cariño para sus clientes. Disponen de todo esto en un ambiente familiar y agradable donde el lema corporativo es "la calidad NO está reñida con el precio" y su máxima, siempre cocinar con cariño. ",
                                       "Dilluns de 8 a 16h i de dimecres a diumenge de 12 a 23:30h. Dimarts tancat.",
                                       "Lunes de 8 a 16h y de miércoles a domingo de 12 a 23:30h. Martes cerrado.",
                                       "Palma", "c/Jafuda Cresques, 6", "971904492", "www.racodelabonacuina.com",
                                       "entre 10 i 15 €", "pa amb oli, tapes, arrosseria, ");