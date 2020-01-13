
ALTER TABLE `payment_banks` ADD `signature` VARCHAR(191) NULL DEFAULT NULL AFTER `attachment`; 

ALTER TABLE `payment_cashes` ADD `signature` VARCHAR(191) NULL DEFAULT NULL AFTER `attachment`; 
