CREATE DATABASE product_search;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image_link VARCHAR(255),
    title VARCHAR(255),
    description TEXT
);
