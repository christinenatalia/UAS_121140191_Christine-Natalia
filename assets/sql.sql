
CREATE TABLE sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    series VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO sales (name, type, series, price, email) VALUES
('Samsung Galaxy S21', 'Smartphone', 'S21', 799.99, 'john.doe@example.com'),
('iPhone 13', 'Smartphone', 'iPhone 13', 999.99, 'jane.smith@example.com'),
('Dell XPS 13', 'Laptop', 'XPS 13', 1299.99, 'bob.jones@example.com'),
('Sony WH-1000XM4', 'Headphones', 'WH-1000XM4', 349.99, 'alice.johnson@example.com'),
('iPad Air', 'Tablet', 'iPad Air', 499.99, 'carol.white@example.com'),
('HP Spectre x360', 'Laptop', 'Spectre x360', 1199.99, 'david.black@example.com'),
('Google Pixel 6', 'Smartphone', 'Pixel 6', 699.99, 'emily.green@example.com'),
('Beats Studio Buds', 'Earbuds', 'Studio Buds', 149.99, 'frank.miller@example.com'),
('Microsoft Surface Pro 7', 'Tablet', 'Surface Pro 7', 899.99, 'grace.brown@example.com'),
('OnePlus 9', 'Smartphone', 'OnePlus 9', 699.99, 'henry.jones@example.com');

