-- DATABASE
CREATE DATABASE IF NOT EXISTS VPN;
DEFAULT CHARACTER SET utf8 COLLATE utf8_;
USE VPN;

-- TABLES

CREATE TABLE user (
	user_id int AUTO_INCREMENT  not null,
	user_name varchar(50)		not null,
	user_surname varchar(50)	not null,
	user_email varchar(50)  	not null,
	user_phone int(50)  		not null,
	user_pass varchar(50)  	not null,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (user_id)
);

CREATE TABLE VPN (
	vpn_id int AUTO_INCREMENT   	not null,
	vpn_country varchar(15) 		not null,
	vpn_city varchar(15)    		not null,
	vpn_ip_address varchar(15)  	not null,
	vpn_ip_route varchar(15) 		not null,
	vpn_isp varchar(40) 			not null,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (vpn_id)
);

-- QUERYS

insert into
    User (user_email, user_pass)
    values
        ('igardiet@gmail.com', '123456');

insert into
    VPN (vpn_country, vpn_city, vpn_ip_address, vpn_ip_route, vpn_isp)
    values
        ('China', 'Hong Kong', '185.180.255.98', '183.345.264.35', 'Ahin Kum int provider CHINA E.S'),
        ('Colombia', 'Cartagena', '123.654.374.82', '275.873.694.09', 'CFibra informatica S.A');