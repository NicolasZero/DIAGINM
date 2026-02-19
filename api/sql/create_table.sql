-- Elimina la vieja base de datos
-- DROP DATABASE api_pruebas;

-- Crea la base de datos
-- CREATE DATABASE api_pruebas;

CREATE TABLE roles(
    id integer NOT NULL UNIQUE GENERATED ALWAYS AS IDENTITY (START WITH 1),
    role varchar NOT NULL UNIQUE
);


-- crea las tablas
CREATE TABLE users(
    id integer NOT NULL UNIQUE GENERATED ALWAYS AS IDENTITY (START WITH 1),
    username varchar NOT NULL UNIQUE,
    password varchar NOT NULL,
    role_id integer REFERENCES roles(id)
);

-- inserta los datos
INSERT INTO roles (id,role) OVERRIDING SYSTEM VALUE
(1,'admin'),
(2,'user');

SELECT pg_catalog.setval('roles_id_seq', 3, true);

INSERT INTO users (username,password,role_id) VALUES ('nicojs2011@gmail.com','28076011');