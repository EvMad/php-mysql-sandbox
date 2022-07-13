DROP DATABASE IF EXISTS collection_db;
CREATE DATABASE collection_db;
USE collection_db;

CREATE TABLE users(
    id VARCHAR(30) NOT NULL,
    full_name VARCHAR(250) DEFAULT NULL,
    email VARCHAR(250) DEFAULT NULL,
    PRIMARY KEY (id)
);