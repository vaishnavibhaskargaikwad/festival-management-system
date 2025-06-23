CREATE DATABASE IF NOT EXISTS festival;
USE festival;
CREATE TABLE festival(
    name VARCHAR(20) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(30) NOT NULL
);
CREATE TABLE message(
    name VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
);