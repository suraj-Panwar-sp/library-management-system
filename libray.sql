CREATE DATABASE library_management;

USE library_management;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL
);

-- Products table for the categories
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code_no_from VARCHAR(20) NOT NULL,
    code_no_to VARCHAR(20) NOT NULL,
    category VARCHAR(50) NOT NULL
);

-- Insert initial product details
INSERT INTO products (code_no_from, code_no_to, category) VALUES
('SC(B/M)000001', 'SC(B/M)000004', 'Science'),
('EC(B/M)000001', 'EC(B/M)000004', 'Economics'),
('FC(B/M)000001', 'FC(B/M)000004', 'Fiction'),
('CH(B/M)000001', 'CH(B/M)000004', 'Children'),
('PD(B/M)000001', 'PD(B/M)000004', 'Personal Development');
