-- Clear existing data
DELETE FROM gas_inventory;
DELETE FROM shops;

-- Reset auto-increment
ALTER TABLE shops AUTO_INCREMENT = 1;
ALTER TABLE gas_inventory AUTO_INCREMENT = 1;

-- Insert dummy shops (password '123' hashed with password_hash)
INSERT INTO shops (shop_name, owner_name, email, password, address, phone, latitude, longitude) VALUES
('Sampath Gas Shop', 'Sampath Perera', 'sampath@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'No 123, Galle Road, Colombo 04', '0711234567', 6.8866, 79.8590),
('Lanka Gas Center', 'Kumara Silva', 'kumara@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '45 Main Street, Kandy', '0771234567', 7.2906, 80.6337),
('City Gas Point', 'Nimal Fernando', 'nimal@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '78 Hospital Road, Galle', '0751234567', 6.0535, 80.2210),
('Quick Gas Store', 'Anil Perera', 'anil@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '156 Temple Road, Nugegoda', '0761234567', 6.8649, 79.8997),
('Super Gas Shop', 'Sunil Rathnayake', 'sunil@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '34 Market Street, Matara', '0781234567', 5.9549, 80.5550),
('New Gas Center', 'Kamal Mendis', 'kamal@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '90 Lake Road, Kurunegala', '0791234567', 7.4867, 80.3647),
('Star Gas Point', 'Ranjith Silva', 'ranjith@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '23 Beach Road, Negombo', '0721234567', 7.2083, 79.8358),
('Royal Gas Shop', 'Prasad Gunasekara', 'prasad@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '67 Hill Street, Ratnapura', '0731234567', 6.6837, 80.4024),
('Metro Gas Store', 'Lasith Bandara', 'lasith@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '12 Station Road, Anuradhapura', '0741234567', 8.3114, 80.4037),
('Family Gas Center', 'Mahesh Jayawardena', 'mahesh@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '89 Canal Road, Batticaloa', '0701234567', 7.7170, 81.7000),
('Gas Express', 'Chaminda Perera', 'chaminda@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '45 School Lane, Jaffna', '0811234567', 9.6615, 80.0255),
('City Gas Hub', 'Nuwan Silva', 'nuwan@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '78 Temple Road, Gampaha', '0821234567', 7.0873, 79.9990),
('Gas Zone', 'Pradeep Kumar', 'pradeep@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '34 Main Road, Trincomalee', '0831234567', 8.5874, 81.2152),
('Gas Plus', 'Rohan Fernando', 'rohan@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '91 Beach Road, Kalutara', '0841234567', 6.5854, 79.9608),
('Gas World', 'Saman Kumara', 'saman@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '56 Hospital Road, Badulla', '0851234567', 6.9934, 81.0550);

-- Insert dummy inventory data
INSERT INTO gas_inventory (shop_id, cylinder_count) VALUES
(1, 45),
(2, 32),
(3, 28),
(4, 50),
(5, 15),
(6, 40),
(7, 22),
(8, 35),
(9, 18),
(10, 42),
(11, 25),
(12, 30),
(13, 20),
(14, 38),
(15, 27);
