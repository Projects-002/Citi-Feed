create database citizen_online;
use citizen_online;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    u_name VARCHAR(255) NOT NULL,
    id_number VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL, -- Storing hashed passwords for security
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
