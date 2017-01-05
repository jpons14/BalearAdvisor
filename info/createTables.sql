-- Comentaris
USE spainskills_db;

DROP TABLE IF EXISTS comentaris;
CREATE TABLE comentaris (
  id          INT PRIMARY KEY AUTO_INCREMENT,
  usuari      VARCHAR(100),
  establiment VARCHAR(100),
  `text`      TEXT,
  `data`      VARCHAR(50),
  `hora`      VARCHAR(50)
);

# DROP TABLE IF EXISTS establiemnts;
# CREATE TABLE establiments (
#   nom            VARCHAR(100) PRIMARY KEY,
#   descripcio_cat TEXT,
#   descripcio_esp TEXT,
#   horari_cat     VARCHAR(200),
#   horari_esp     VARCHAR(200),
#   poblacio       VARCHAR(50),
#   adreca         VARCHAR(100),
#   telefon        INT,
#   web            VARCHAR(70),
#   preu           VARCHAR(50),
#   tipus_cuin     ENUM,
#
# )