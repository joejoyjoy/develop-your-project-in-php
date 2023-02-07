-- DATABASE
CREATE DATABASE IF NOT EXISTS vpn;

USE vpn;

-- TABLES

CREATE TABLE user (
	user_id int AUTO_INCREMENT  not null,
	user_name varchar(50)		not null,
	user_surname varchar(50)	not null,
	user_email varchar(50)  	not null,
	user_phone int(50)  		not null,
	user_pass varchar(100)  	not null,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (user_id)
);

CREATE TABLE vpn (
	vpn_id int AUTO_INCREMENT   	not null,
	vpn_country varchar(15) 		not null,
	vpn_city varchar(15)    		not null,
	vpn_ip_address varchar(15)  	not null,
	vpn_ip_route varchar(15) 		not null,
	vpn_isp varchar(40) 			not null,
	created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (vpn_id)
);