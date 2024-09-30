CREATE DATABASE flaredb;
USE flaredb;

-- Criação da tabela `users` primeiro
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    balance DECIMAL(10, 2) NOT NULL,
    profile VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    register_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Criação da tabela `games`
DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(50),
    description TEXT,
    min_bet DECIMAL(10) NOT NULL,
    max_bet DECIMAL(10) NOT NULL
);

--  Tabela bets
DROP TABLE IF EXISTS `bets`;
CREATE TABLE IF NOT EXISTS `bets` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    game_id INT,
    bet_amount DECIMAL(10, 2) NOT NULL,
    result VARCHAR(50),
    bet_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (game_id) REFERENCES games(id)
);

INSERT INTO users (id, name, balance, profile, password) 
VALUES (1, 'ADM', 0.00, 'Administrador do sistema', 'your_password');