-- -----------------------------------------------------
-- Table .`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `account_type` VARCHAR(50) NOT NULL,
  `company_address` VARCHAR(50),
  `company_name` VARCHAR(50),
  `company_description` VARCHAR(200),
  `ingress_year` VARCHAR(4),
  `curriculum` VARCHAR(500),
  `course_name` VARCHAR(500),
  `contact_name` VARCHAR(50),
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;