CREATE TABLE `custumer` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`address` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`postcode` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`city` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`phoneNumber` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`site` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`siren` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=MyISAM
;

CREATE TABLE `users` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`firstName` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`lastName` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`email` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_general_ci',
	`password` LONGTEXT NOT NULL COLLATE 'utf8mb4_general_ci',
	`permission` INT(10) NOT NULL DEFAULT '1',
	`createdDate` DATETIME NOT NULL DEFAULT (now()),
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=MyISAM
;

