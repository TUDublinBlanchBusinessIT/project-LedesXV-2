CREATE DATABASE mealtrackerdb;
USE mealtrackerdb;

CREATE TABLE meal_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recommended_time VARCHAR(100)
);

INSERT INTO meal_types (type_name, recommended_time) VALUES
('Breakfast', '06:00–10:30'),
('Lunch', '12:00–15:00'),
('Dinner', '17:00–21:00'),
('Snack', 'Anytime');

CREATE TABLE meals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meal_name VARCHAR(100),
    meal_type_id INT,
    calories INT,
    protein INT,
    fat INT,
    carbs INT,
    meal_date DATE,
    FOREIGN KEY (meal_type_id) REFERENCES meal_types(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(15) NOT NULL,
    password VARCHAR(15) NOT NULL
);

INSERT INTO users (username,password)
VALUES ('Prince', MD5('141618'));
