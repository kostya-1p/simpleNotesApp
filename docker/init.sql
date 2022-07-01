CREATE DATABASE IF NOT EXISTS notes_schema;
USE notes_schema;
CREATE TABLE IF NOT EXISTS `notes` (
                         `id` int NOT NULL AUTO_INCREMENT,
                         `title` varchar(90) NOT NULL,
                         `description` varchar(255) DEFAULT NULL,
                         `create_date` datetime NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;