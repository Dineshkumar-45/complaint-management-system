-- Create a database named 'complaint_system'
CREATE DATABASE complaint_system;

-- Use the newly created database
USE complaint_system;

-- Create a table named 'complaints'
CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100) NOT NULL,
    complaint TEXT NOT NULL,
    status ENUM('Pending', 'Resolved') DEFAULT 'Pending'
);
