-- MySQL Script generated by MySQL Workbench
-- 07/06/22 07:43:19
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sapudb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sapudb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sapudb` DEFAULT CHARACTER SET utf8 ;
USE `sapudb` ;

-- -----------------------------------------------------
-- Table `sapudb`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapudb`.`aluno` (
  `idAluno` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  `instituicao` VARCHAR(255) NOT NULL,
  `curso` VARCHAR(255) NOT NULL,
  `created` DATETIME NULL,
  `modified` DATETIME NULL,
  PRIMARY KEY (`idAluno`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `idAluno_UNIQUE` (`idAluno` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapudb`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapudb`.`disciplina` (
  `idDisciplina` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NOT NULL,
  `periodo` INT NOT NULL,
  `carga_horaria` INT NOT NULL,
  `sigla` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idDisciplina`),
  UNIQUE INDEX `idDisciplina_UNIQUE` (`idDisciplina` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sapudb`.`aluno_disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sapudb`.`aluno_disciplina` (
  `idAlunoDisciplina` INT NOT NULL AUTO_INCREMENT,
  `aluno_idAluno` INT NOT NULL,
  `disciplina_idDisciplina` INT NOT NULL,
  PRIMARY KEY (`idAlunoDisciplina`),
  INDEX `fk_aluno_has_disciplina_disciplina1_idx` (`disciplina_idDisciplina` ASC),
  INDEX `fk_aluno_has_disciplina_aluno_idx` (`aluno_idAluno` ASC),
  UNIQUE INDEX `idAlunoDisciplina_UNIQUE` (`idAlunoDisciplina` ASC),
  CONSTRAINT `fk_aluno_has_disciplina_aluno`
    FOREIGN KEY (`aluno_idAluno`)
    REFERENCES `sapudb`.`aluno` (`idAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_has_disciplina_disciplina1`
    FOREIGN KEY (`disciplina_idDisciplina`)
    REFERENCES `sapudb`.`disciplina` (`idDisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;