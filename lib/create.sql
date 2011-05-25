SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `padel` ;
CREATE SCHEMA IF NOT EXISTS `padel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `padel` ;

-- -----------------------------------------------------
-- Table `padel`.`admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`admin` ;

CREATE  TABLE IF NOT EXISTS `padel`.`admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(255) NULL DEFAULT NULL ,
  `password` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`admin_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `padel`.`leagues`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`leagues` ;

CREATE  TABLE IF NOT EXISTS `padel`.`leagues` (
  `league_id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  `status` VARCHAR(255) NULL DEFAULT NULL ,
  `year` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`league_id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `padel`.`teams`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`teams` ;

CREATE  TABLE IF NOT EXISTS `padel`.`teams` (
  `team_id` INT NOT NULL AUTO_INCREMENT ,
  `name1` VARCHAR(255) NULL DEFAULT NULL ,
  `surname1` VARCHAR(255) NULL DEFAULT NULL ,
  `phone1` VARCHAR(255) NULL DEFAULT NULL ,
  `email1` VARCHAR(255) NULL DEFAULT NULL ,
  `name2` VARCHAR(255) NULL DEFAULT NULL ,
  `surname2` VARCHAR(255) NULL DEFAULT NULL ,
  `phone2` VARCHAR(255) NULL DEFAULT NULL ,
  `email2` VARCHAR(255) NULL DEFAULT NULL ,
  `user_name` VARCHAR(255) NULL DEFAULT NULL ,
  `password` VARCHAR(255) NULL DEFAULT NULL ,
  `league_league_id` INT NOT NULL ,
  PRIMARY KEY (`team_id`) ,
  INDEX `fk_team_league1` (`league_league_id` ASC) ,
  CONSTRAINT `fk_team_league1`
    FOREIGN KEY (`league_league_id` )
    REFERENCES `padel`.`leagues` (`league_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `padel`.`stages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`stages` ;

CREATE  TABLE IF NOT EXISTS `padel`.`stages` (
  `stage_id` INT NOT NULL AUTO_INCREMENT ,
  `number` INT NULL ,
  `start_date` VARCHAR(255) NULL ,
  `finish_date` VARCHAR(255) NULL ,
  `year` VARCHAR(255) NULL ,
  `status` VARCHAR(255) NULL ,
  `league_league_id` INT NOT NULL ,
  PRIMARY KEY (`stage_id`) ,
  INDEX `fk_stages_league1` (`league_league_id` ASC) ,
  CONSTRAINT `fk_stages_league1`
    FOREIGN KEY (`league_league_id` )
    REFERENCES `padel`.`leagues` (`league_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `padel`.`divisions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`divisions` ;

CREATE  TABLE IF NOT EXISTS `padel`.`divisions` (
  `division_id` INT NOT NULL AUTO_INCREMENT ,
  `level` INT NULL ,
  `stages_stage_id` INT NOT NULL ,
  PRIMARY KEY (`division_id`) ,
  INDEX `fk_divisions_stages1` (`stages_stage_id` ASC) ,
  CONSTRAINT `fk_divisions_stages1`
    FOREIGN KEY (`stages_stage_id` )
    REFERENCES `padel`.`stages` (`stage_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `padel`.`games`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`games` ;

CREATE  TABLE IF NOT EXISTS `padel`.`games` (
  `game_id` INT NOT NULL AUTO_INCREMENT ,
  `club` VARCHAR(255) NULL ,
  `result` VARCHAR(255) NULL ,
  `local_game1` VARCHAR(255) NULL ,
  `local_game2` VARCHAR(255) NULL ,
  `local_game3` VARCHAR(255) NULL ,
  `visitor_game1` VARCHAR(255) NULL ,
  `visitor_game2` VARCHAR(255) NULL ,
  `visitor_game3` VARCHAR(255) NULL ,
  `tie_break1` VARCHAR(255) NULL ,
  `tie_break2` VARCHAR(255) NULL ,
  `tie_break3` VARCHAR(255) NULL ,
  `super_tie_break` VARCHAR(255) NULL ,
  `team_local_id` INT NOT NULL ,
  `team_visitor_id` INT NOT NULL ,
  `team_winner_id` INT NOT NULL ,
  `team_looser_id` INT NOT NULL ,
  PRIMARY KEY (`game_id`) ,
  INDEX `fk_games_team1` (`team_local_id` ASC) ,
  INDEX `fk_games_team2` (`team_visitor_id` ASC) ,
  INDEX `fk_games_team3` (`team_winner_id` ASC) ,
  INDEX `fk_games_team4` (`team_looser_id` ASC) ,
  CONSTRAINT `fk_games_team1`
    FOREIGN KEY (`team_local_id` )
    REFERENCES `padel`.`teams` (`team_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_games_team2`
    FOREIGN KEY (`team_visitor_id` )
    REFERENCES `padel`.`teams` (`team_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_games_team3`
    FOREIGN KEY (`team_winner_id` )
    REFERENCES `padel`.`teams` (`team_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_games_team4`
    FOREIGN KEY (`team_looser_id` )
    REFERENCES `padel`.`teams` (`team_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `padel`.`divisions_has_teams`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `padel`.`divisions_has_teams` ;

CREATE  TABLE IF NOT EXISTS `padel`.`divisions_has_teams` (
  `divisions_division_id` INT NOT NULL ,
  `teams_team_id` INT NOT NULL ,
  PRIMARY KEY (`divisions_division_id`, `teams_team_id`) ,
  INDEX `fk_divisions_has_teams_teams1` (`teams_team_id` ASC) ,
  INDEX `fk_divisions_has_teams_divisions1` (`divisions_division_id` ASC) ,
  CONSTRAINT `fk_divisions_has_teams_divisions1`
    FOREIGN KEY (`divisions_division_id` )
    REFERENCES `padel`.`divisions` (`division_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_divisions_has_teams_teams1`
    FOREIGN KEY (`teams_team_id` )
    REFERENCES `padel`.`teams` (`team_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `padel`.`admin`
-- -----------------------------------------------------
START TRANSACTION;
USE `padel`;
INSERT INTO `padel`.`admin` (`admin_id`, `user_name`, `password`) VALUES (1, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

COMMIT;

-- -----------------------------------------------------
-- Data for table `padel`.`leagues`
-- -----------------------------------------------------
START TRANSACTION;
USE `padel`;
INSERT INTO `padel`.`leagues` (`league_id`, `name`, `status`, `year`) VALUES (1, 'League A', 'Active', '2010');
INSERT INTO `padel`.`leagues` (`league_id`, `name`, `status`, `year`) VALUES (2, 'League C', 'Active', '2011');
INSERT INTO `padel`.`leagues` (`league_id`, `name`, `status`, `year`) VALUES (3, 'League B', 'Inactive', '2009');

COMMIT;

-- -----------------------------------------------------
-- Data for table `padel`.`teams`
-- -----------------------------------------------------
START TRANSACTION;
USE `padel`;
INSERT INTO `padel`.`teams` (`team_id`, `name1`, `surname1`, `phone1`, `email1`, `name2`, `surname2`, `phone2`, `email2`, `user_name`, `password`, `league_league_id`) VALUES (1, 'Mirentxu', 'Vera', '986304040', 'vera@gmail.com', 'Maria Jose', 'Moure', '986304050', 'moure@gmail.com', 'veraMoure', '886fed01789257424228dc95fe3b5b319335ab6d', 1);
INSERT INTO `padel`.`teams` (`team_id`, `name1`, `surname1`, `phone1`, `email1`, `name2`, `surname2`, `phone2`, `email2`, `user_name`, `password`, `league_league_id`) VALUES (2, 'Xandra', 'Lopez', '986304060', 'lopez@gmail.com', 'Paola', 'Strasser', '986304070', 'strasser@gmail.com', 'lopezStrasser', 'e58b0f284321108f80703dc19099b71002f5281d', 1);
INSERT INTO `padel`.`teams` (`team_id`, `name1`, `surname1`, `phone1`, `email1`, `name2`, `surname2`, `phone2`, `email2`, `user_name`, `password`, `league_league_id`) VALUES (3, 'Loreto', 'Ramos', '986304080', 'ramos@gmail.com', 'Carla', 'Barciela', '986305010', 'barciela@gmail.com', 'ramosBarciela', '8fbdb4afa61657da916b0211fc49f00a6e304a20', 1);

COMMIT;

-- -----------------------------------------------------
-- Data for table `padel`.`stages`
-- -----------------------------------------------------
START TRANSACTION;
USE `padel`;
INSERT INTO `padel`.`stages` (`stage_id`, `number`, `start_date`, `finish_date`, `year`, `status`, `league_league_id`) VALUES (1, 1, '1-5-2011', '15-15-2011', '2011', 'Active', 1);
INSERT INTO `padel`.`stages` (`stage_id`, `number`, `start_date`, `finish_date`, `year`, `status`, `league_league_id`) VALUES (2, 2, '16-5-2011', '31-5-2011', '2011', 'Inactive', 1);
INSERT INTO `padel`.`stages` (`stage_id`, `number`, `start_date`, `finish_date`, `year`, `status`, `league_league_id`) VALUES (3, 3, '1-6-2011', '15-6-2011', '2011', 'Inactive', 1);

COMMIT;

-- -----------------------------------------------------
-- Data for table `padel`.`divisions`
-- -----------------------------------------------------
START TRANSACTION;
USE `padel`;
INSERT INTO `padel`.`divisions` (`division_id`, `level`, `stages_stage_id`) VALUES (1, 1, 1);
INSERT INTO `padel`.`divisions` (`division_id`, `level`, `stages_stage_id`) VALUES (2, 2, 1);
INSERT INTO `padel`.`divisions` (`division_id`, `level`, `stages_stage_id`) VALUES (3, 3, 1);

COMMIT;
