CREATE DATABASE mealtrackerdb;

USE mealtrackerdb;

CREATE TABLE meals (
 id INT AUTO_INCREMENT PRIMARY KEY,
 meal_type VARCHAR(50),
 calories INT,
 protein INT,
 fat INT,
 carbs INT,
 meal_date DATE
);
