CREATE DATABASE lista_tarefas_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE lista_tarefas_db;

CREATE TABLE tarefas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT DEFAULT NULL,
    concluida TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);