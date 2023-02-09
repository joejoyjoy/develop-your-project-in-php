DROP DATABASE IF EXISTS php_vpn;
CREATE DATABASE IF NOT EXISTS php_vpn;
USE php_vpn;
SELECT 'CREATING DATABASE STRUCTURE' AS 'INFO';
DROP TABLE IF EXISTS users,
rols,
VPN;
-- ------------------ --
-- CREATE TABLE users --
-- ------------------ --
CREATE TABLE users(
    user_id INT AUTO_INCREMENT NOT NULL,
    user_name VARCHAR(50) NOT NULL,
    user_surname VARCHAR(50) NOT NULL,
    user_email VARCHAR(50) NOT NULL,
    user_phone INT(9) NOT NULL,
    user_pass VARCHAR(100) NOT NULL,
    user_rol INT(11) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(user_id)
);
-- Insert into TABLE
INSERT INTO users(
        user_name,
        user_surname,
        user_email,
        user_phone,
        user_pass,
        user_rol
    )
VALUES(
        'John',
        'Smith',
        'johnsmith@gmail.com',
        604978305,
        '$2y$10$JFuupR/vZBQwugUhzZzFTOKZLx4.ufOpONnaPbq2m5O2yWhFHKEVm',
        1
    ),
(
        'Robert',
        'Smith',
        'robertsmith@gmail.com',
        655978350,
        '$2y$10$apjtN/2avA9kYnna01HuROQ0g/AxpQZYRjQKR4sHq8.LMEtAQWeb6',
        2
    );
-- ------------------ --
-- CREATE TABLE rols --
-- ------------------ --
CREATE TABLE rols(
    user_id INT NOT NULL,
    rols VARCHAR(50) NOT NULL,
    FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    PRIMARY KEY(user_id, rols)
);
-- Insert into TABLE
INSERT INTO rols (user_id, rols)
VALUES (1, 'Administrator'),
    (2, 'Client');
-- ---------------- --
-- CREATE TABLE VPN --
-- ---------------- --
CREATE TABLE VPN(
    vpn_id INT AUTO_INCREMENT NOT NULL,
    vpn_country VARCHAR(15) NOT NULL,
    vpn_city VARCHAR(15) NOT NULL,
    vpn_ip_address VARCHAR(15) NOT NULL,
    vpn_ip_route VARCHAR(15) NOT NULL,
    vpn_isp VARCHAR(40) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(vpn_id)
);
-- Insert into TABLE
INSERT INTO VPN(
        vpn_country,
        vpn_city,
        vpn_ip_address,
        vpn_ip_route,
        vpn_isp
    )
VALUES(
        'Germany',
        'Frankfurt',
        '157.230.20.59',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'Netherlands',
        'Amsterdam',
        '165.232.82.219',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'England',
        'London',
        '167.71.140.172',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'Finland',
        'Helsinki',
        '194.34.132.106',
        '14061',
        'Oy Creanova Ltd.'
    ),
(
        'Greece',
        'Tiraspol',
        '195.146.4.42',
        '201924',
        'NAPRI s.r.o.'
    ),
(
        'Nigeria',
        'Lagos',
        '104.166.144.87',
        '21859',
        'Zenlayer Inc'
    ),
(
        'United States',
        'Clifton',
        '104.154.2.394',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'United States',
        'California',
        '102.154.2.394',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'United States',
        'Los Angeles',
        '102.154.2.394',
        '15430',
        'DigitalOcean LLC'
    ),
(
        'United States',
        'Miami',
        '104.154.2.394',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'United States',
        'Chicage',
        '124.154.26.394',
        '14061',
        'DigitalOcean LLC'
    ),
(
        'Peru',
        'Lima',
        '200.25.45.232',
        '7195',
        'EdgeUno ID'
    ),
(
        'Argentina',
        'Buenos Aires',
        '200.25.50.69',
        '7195',
        'EdgeUno ID'
    ),
(
        'Colombia',
        'Cartagena',
        '123.654.374.82',
        '7195',
        'CFibra informatica S.A'
    );
-- ---------------- --
-- SELECT LEFT JOIN --
-- ---------------- --
SELECT u.user_id,
    u.user_email,
    u.user_pass,
    r.rols
FROM users u
    LEFT JOIN rols r ON u.user_rol = r.user_id;