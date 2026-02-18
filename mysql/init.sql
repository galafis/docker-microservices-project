CREATE DATABASE IF NOT EXISTS microservices_db;
USE microservices_db;

CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    status VARCHAR(50) DEFAULT 'active',
    port INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO services (name, status, port) VALUES
('nginx-proxy', 'active', 80),
('php-app', 'active', 80),
('mysql-db', 'active', 3306);
