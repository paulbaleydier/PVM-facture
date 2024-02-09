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
