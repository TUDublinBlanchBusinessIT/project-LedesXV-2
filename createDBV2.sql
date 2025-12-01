CREATE DATABASE mealtrackerdb;
USE mealtrackerdb;

CREATE TABLE meal_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meal_name VARCHAR(50)
);

INSERT INTO meal_types (meal_name) VALUES
('Breakfast'),
('Lunch'),
('Dinner'),
('Snack');

CREATE TABLE meals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meal_type_id INT,
    calories INT,
    protein INT,
    fat INT,
    carbs INT,
    meal_date DATE,
    FOREIGN KEY (meal_type_id) REFERENCES meal_types(id)
);
