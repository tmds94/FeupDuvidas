-- USERS TABLE

CREATE TABLE users (
id SERIAL PRIMARY KEY,
username VARCHAR(128) NOT NULL UNIQUE,
password VARCHAR(128) NOT NULL,
name VARCHAR(64) NOT NULL,
surname VARCHAR(64) NOT NULL,
emailalt VARCHAR(64)  UNIQUE,
emailup VARCHAR(64) NOT NULL UNIQUE,
facebook VARCHAR(64),
recover_code VARCHAR(32)
);

-- AREAS TABLE

CREATE TABLE areas (
  id INTEGER PRIMARY KEY,
  name VARCHAR(64) NOT NULL 
);

CREATE TABLE userlikes (
  userid INTEGER NOT NULL  REFERENCES users(id),
  uploadid INTEGER NOT NULL,
  type VARCHAR(10) NOT NULL,
  comment VARCHAR(150)
);

CREATE TABLE userdislikes (
  userid INTEGER NOT NULL  REFERENCES users(id),
  uploadid INTEGER NOT NULL,
  type VARCHAR(10) NOT NULL,
  comment VARCHAR(150)
);


-- PREENCHER TABELA AREAS

INSERT INTO areas (id, name) VALUES (1,'Mechanics');
INSERT INTO areas (id, name) VALUES (2,'Electrical');
INSERT INTO areas (id, name) VALUES (3,'Informatics');
INSERT INTO areas (id, name) VALUES (4,'Mines');
INSERT INTO areas (id, name) VALUES (5,'Bioengineering');
INSERT INTO areas (id, name) VALUES (6,'Environmental');
INSERT INTO areas (id, name) VALUES (7,'Metallurgical and Materials');
INSERT INTO areas (id, name) VALUES (8,'Industrial Management');
INSERT INTO areas (id, name) VALUES (9,'Civil');
INSERT INTO areas (id, name) VALUES (10,'Physics');
INSERT INTO areas (id, name) VALUES (11,'Chemistry');



-- USERAREAS TABLE

CREATE TABLE userareas (
  userid INTEGER REFERENCES users(id),
  areaid INTEGER NOT NULL  REFERENCES areas(id)
);

-- USERSTATS TABLE

CREATE TABLE userstats (
  userid SERIAL PRIMARY KEY,
  joindate date,
  uploads INT,
  rate INT,
  lastactivity TIMESTAMP
);


--DOCUMENTS TABLE

CREATE TABLE documents (
  id SERIAL PRIMARY KEY,
  userid INTEGER REFERENCES users(id),
  areaid INTEGER REFERENCES areas(id),
  name VARCHAR(64) NOT NULL UNIQUE,
  description VARCHAR(512),
  format VARCHAR(32),
  size BIGINT,
  date TIMESTAMP
);