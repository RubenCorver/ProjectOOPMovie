-- MySQL Script generated by MySQL Workbench
-- Fri Feb 21 11:10:07 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`movie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`movie` (
  `idfilm` INT NOT NULL AUTO_INCREMENT,
  `imdbid` INT NOT NULL,
  `seen` TINYINT NULL,
  `rating` INT NULL,
  PRIMARY KEY (`idfilm`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`movie_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`movie_has_user` (
  `movie_idfilm` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  PRIMARY KEY (`movie_idfilm`, `user_iduser`),
  INDEX `fk_movie_has_user_user1_idx` (`user_iduser` ASC) VISIBLE,
  INDEX `fk_movie_has_user_movie_idx` (`movie_idfilm` ASC) VISIBLE,
  CONSTRAINT `fk_movie_has_user_movie`
    FOREIGN KEY (`movie_idfilm`)
    REFERENCES `mydb`.`movie` (`idfilm`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_movie_has_user_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `mydb`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
