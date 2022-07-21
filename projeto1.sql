-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: 04-Abr-2022 às 15:31
-- Versão do servidor: 5.7.23
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Estrutura da tabela `Registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro`(
 `id` int(45) NOT NULL AUTO_INCREMENT,
 `nome` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `senha` varchar(255) NOT NULL,
 `instituicao` varchar(255) NOT NULL,
 `curso` varchar(255) NOT NULL,
 `created` datetime NOT NULL,
 `modified` datetime DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registros`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `Disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina`(
 `idDiciplina` int(45) NOT NULL AUTO_INCREMENT,
 `nome` varchar(255) NOT NULL,
 `periodo` int(255) NOT NULL,
 `carga_horaria` int(255) NOT NULL,
 `sigla` varchar(255) NOT NULL,
 PRIMARY KEY (`idDiciplina`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


