DROP DATABASE IF EXISTS php_vpn;
CREATE DATABASE IF NOT EXISTS php_vpn;
USE php_vpn;

SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';

DROP TABLE IF EXISTS users,
                     rules;

/*!50503 set default_storage_engine = InnoDB */;
/*!50503 select CONCAT('storage engine: ', @@default_storage_engine) as INFO */;

-- ------------------ --
-- CREATE TABLE users --
-- ------------------ --
CREATE TABLE users (
    users_no 	INT 			NOT NULL AUTO_INCREMENT,
    users_name  VARCHAR(14)     NOT NULL,
    users_pswd  VARCHAR(16)     NOT NULL,
    users_rule 	INT(11) 		NOT NULL,
    PRIMARY KEY (users_no)
);
-- Insert into TABLE
INSERT INTO users (users_name, users_pswd, users_rule) 
	VALUES ('Jhon', '12345', 1),
		('Robert', '12345', 2),
        ('Sarah', '12345', 2),
        ('Jennifer', '12345678', 1),
        ('David', '12345', 2);



-- ------------------ --
-- CREATE TABLE rules --
-- ------------------ --
CREATE TABLE rules (
    users_no      INT             NOT NULL,
    rules       VARCHAR(50)     NOT NULL,
    FOREIGN KEY (users_no) REFERENCES users (users_no) ON DELETE CASCADE,
    PRIMARY KEY (users_no, rules)
);
-- Insert into TABLE
INSERT INTO rules (users_no, rules) 
	VALUES (1, 'Administrator'),
		(2, 'Client');



-- ---------------- --
-- CREATE TABLE VPN --
-- ---------------- --
CREATE TABLE VPN (
	vpn_id int AUTO_INCREMENT   not null,
	vpn_country varchar(15) not null,
	vpn_city varchar(15)    not null,
	vpn_ip_address varchar(15)   not null,
	vpn_asn varchar(15) not null,
	vpn_isp varchar(40) not null,
	PRIMARY KEY (vpn_id)
);
-- Insert into TABLE
INSERT INTO VPN (vpn_country, vpn_city, vpn_ip_address, vpn_asn, vpn_isp)
    values
         ('Germany', 'Frankfurt', '157.230.20.59', '14061', 'DigitalOcean LLC'),
        ('Netherlands', 'Amsterdam', '165.232.82.219', '14061', 'DigitalOcean LLC'),
        ('England', 'London', '167.71.140.172', '14061', 'DigitalOcean LLC'),
        ('Finland', 'Helsinki', '194.34.132.106', '14061', 'Oy Creanova Ltd.'),
        ('Greece', 'Tiraspol', '195.146.4.42', '201924', 'NAPRI s.r.o.'),
        ('Nigeria', 'Lagos', '104.166.144.87', '21859', 'Zenlayer Inc'),
        ('United States', 'Clifton', '104.154.2.394', '14061', 'DigitalOcean LLC'),
        ('United States', 'California', '102.154.2.394', '14061', 'DigitalOcean LLC'),
        ('United States', 'Los Angeles', '102.154.2.394', '15430', 'DigitalOcean LLC'),
        ('United States', 'Miami', '104.154.2.394', '14061', 'DigitalOcean LLC'),
        ('United States', 'Chicage', '124.154.26.394', '14061', 'DigitalOcean LLC'),
        ('Peru', 'Lima', '200.25.45.232', '7195', 'EdgeUno ID'),
        ('Argentina', 'Buenos Aires', '200.25.50.69', '7195', 'EdgeUno ID'),
        ('Colombia', 'Cartagena', '123.654.374.82', '7195', 'CFibra informatica S.A');



-- ---------------- --
-- SELECT LEFT JOIN --
-- ---------------- --
       
select u.users_no, u.users_name, u.users_pswd, r.rules from users u left join rules r on u.users_rule = r.users_no;