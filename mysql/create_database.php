<?php
		
	$db_create = new mysqli('localhost','root','') or die('unable to connect');	
	
	$db_create->query('CREATE DATABASE `blood_bank_management`')  or die('DATABASE creation failed');

	$db_create->query('CREATE TABLE `blood_bank_management`.`members` (
	`username` varchar(50)  NOT NULL,
    `blood_group` VARCHAR(12),
  	`first_name` VARCHAR(50),
   	`last_name` VARCHAR(50),
   	`email` VARCHAR(50),
    `password` VARCHAR(50) NOT NULL,
    `contract_number` VARCHAR(12) ,
    `gender` VARCHAR(8),
    `donar` BOOL DEFAULT 0,
 

	PRIMARY KEY (`username`) 
);') or die('members table creation failed');	


	$db_create->query('CREATE TABLE `blood_bank_management`.`request` (
	`username` varchar(50) NOT NULL,
    `blood_group` VARCHAR(12) ,
    `contract_number` VARCHAR(12),
    `note` VARCHAR(250),
    `tdate` VARCHAR(50),    
  	FOREIGN KEY (`username`) references `members`(`username`) on delete cascade,     
	PRIMARY KEY (`username`) 
);') or die('request table creation failed');	


	$db_create->query('CREATE TABLE `blood_bank_management`.`transaction_history`(
	`trans_id` INT NOT NULL AUTO_INCREMENT,
    `receiver_id` varchar(50) NOT NULL,
    `blood_group` VARCHAR(12),
    `tdate` VARCHAR(50),

    PRIMARY KEY (`trans_id`)
);') or die('transaction_history table creation failed');	

?>