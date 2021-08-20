-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Set-2019 às 19:47
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estagio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(10) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin'),
(2, 'joao', 'unasp2019'),
(3, 'manuela', 'unasp2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ra` int(10) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `idAno` int(2) DEFAULT NULL,
  `cpf` varchar(18) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `statusEstagio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ra`, `nome`, `idAno`, `cpf`, `whatsapp`, `email`, `statusEstagio`) VALUES
(583, 'Erick Souza Fernandes', 1, '822.640.745-15', '+55 (19) 92769 7868', 'ErickSouzaFernandes@gmail.com', 'EstÃ¡gio pausado'),
(1357, 'Luiza Ribeiro Cavalcanti', 2, '739.252.972-27', '+55 (19) 98356 6852', 'LuizaRibeiroCavalcanti@gmail.com', 'EstÃ¡gio pausado'),
(2910, 'Evelyn Sousa Pinto', 2, '965.997.871-50', '+55 (19) 92134 7355', 'evelynsousa@outlook.com', 'EstÃ¡gio pausado'),
(3568, 'Miguel Silva Almeida', 2, '893.100.247-55', '+55 (19) 95321 3431', 'miguelsilvaalmeida@outlook.com', 'EstÃ¡gio pausado'),
(6270, 'Douglas Silva Pereira', 2, '997.820.017-75', '+55 (19) 95988 7028', 'DouglasSilvaPereira@jourrapide.com', 'EstÃ¡gio pausado'),
(15029, 'Sarah GonÃ§alves Oliveira', 1, '292.049.069-95', '+55 (11) 94722 2940', 'saraholiveira@outlook.com', 'EstÃ¡gio pausado'),
(26116, 'Giovanna Gomes Rocha', 2, '626.277.902-77', '+55 (11) 98372 5344', 'giovannagomes@outlook.com', 'EstÃ¡gio pausado'),
(26150, 'Vinicius Santos Dias', 3, '480.812.281-28', '+55 (11) 95933 7126', 'viniciussdias@gmail.com', 'EstÃ¡gio pausado'),
(29701, 'AndrÃ© Pereira Araujo', 1, '781.984.908-84', '+55 (11) 95556 5122', 'andrearaujo@msn.com', 'EstÃ¡gio pausado'),
(30648, 'Julia Pereira Souza', 3, '475.930.555-66', '+55 (11) 92470 9221', 'Juliasouza@gmail.com', 'EstÃ¡gio pausado'),
(32185, 'Gabriela Ferreira Alves', 1, '458.760.394-54', '+55 (11) 94796 180', 'gabrielaferreira@gmail.com', 'EstÃ¡gio pausado'),
(35502, 'Erick Cunha Rocha', 3, '798.447.650-05', '+55 (19) 92764 5317', 'erickcunha@gmail.com', 'EstÃ¡gio pausado'),
(35550, 'Leonardo Ferreira Silva', 2, '918.099.550-09', '+55 (19) 94398 5364', 'leoferreira@outlook.com', 'EstÃ¡gio pausado'),
(38035, 'Leila Pereira Cunha', 1, '763.247.110-30', '+55 (11) 97315 2877', 'leilapereira@gmail.com', 'EstÃ¡gio pausado'),
(42504, 'Erick Dias Barbosa', 3, '354.170.336-93', '+55 (19) 93069 6697', 'erickbarbosa@hotmail.com', 'EstÃ¡gio pausado'),
(42809, 'Luis Azevedo Castro', 1, '645.114.358-80', '+55 (11) 98658 7735', 'Luisazevedo@gmail.com', 'EstÃ¡gio pausado'),
(47800, 'Vitor Cavalcanti Souza', 1, '676.851.885-20', '+55 (11) 93309 9656', 'vitorcavalcanti@hotmail.com', 'EstÃ¡gio pausado'),
(48526, 'Sarah Barros Fernandes', 3, '250.400.467-23', '+55 (11) 95136 6615', 'sarahbarros@gmail.com', 'EstÃ¡gio pausado'),
(50690, 'VinÃ­cius Costa Sousa', 3, '203.386.085-08', '+55 (19) 98917 7948', 'viniciuscsousa@outlook.com', 'EstÃ¡gio pausado'),
(60128, 'KauÃª Lima Araujo', 2, '565.355.078-74', '+55 (11) 95010 5674', 'kauelima@gmail.com', 'EstÃ¡gio pausado'),
(60652, 'Guilherme Rodrigues Carvalho', 1, '527.980.618-81', '+55 (19) 98608 8049', 'guirodrigues@gmail.com', 'EstÃ¡gio pausado'),
(63031, 'Daniel Almeida Melo', 3, '805.484.034-90', '+55 (19) 96395 8604', 'danielmelo@hotmail.com', 'EstÃ¡gio pausado'),
(63300, 'VitÃ³r Santos Barros', 2, '894.276.590-41', '+55 (19) 67374 099', 'santossarros@hotmail.com', 'EstÃ¡gio pausado'),
(66034, 'VitÃ³ria Cavalcanti Rodrigues', 1, '217.697.543-00', '+55 (19) 95375 3917', 'vitoriarodrigues@gmail.com', 'EstÃ¡gio pausado'),
(68581, 'Beatriz Cardoso Araujo', 2, '270.352.324-60', '+55 (19) 97241 7772', 'beatrizcardoso@hotmail.com', 'EstÃ¡gio pausado'),
(69910, 'Yasmin Barros Carvalho', 3, '855.084.119-68', '+55 (11) 98142 8282', 'yasmincarvalho@gmail.com', 'EstÃ¡gio pausado'),
(70234, 'LuÃ­s Alves Costa', 1, '386.902.333-34', '+55 (19) 92837 8400', 'Luiscosta@hotmail.com', 'EstÃ¡gio pausado'),
(78055, 'KauÃª Santos Costa', 3, '435.774.259-54', '+55 (19) 93694 7668', 'kauesantos@gmail.com', 'EstÃ¡gio pausado'),
(79833, 'Tiago Correia Gomes', 2, '582.577.040-24', '+55 (19) 96821 8377', ' tiagogomes@msn.com', 'EstÃ¡gio pausado'),
(85023, 'Carlos Pinto Almeida', 1, '113.731.589-05', '+55 (19) 96830 4301', 'carlosalmeida@hotmail.com', 'EstÃ¡gio pausado'),
(91220, 'Gabriela Costa Barbosa', 3, '278.042.644-61', '+55 (19) 96990 5442', 'gabrielacbarbosa@hotmail.com', 'EstÃ¡gio pausado'),
(95041, 'JÃºlia Melo Castro', 2, '140.318.947-16', '+55 (19) 97351 3183', 'JuliaMeloCastro@jourrapide.com', 'EstÃ¡gio pausado'),
(99072, 'Rafael Cunha Alves', 3, '693.424.466-47', '+55 (11) 93958 4706', 'rafaelalves@outlook.com', 'EstÃ¡gio pausado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anoauxiliar`
--

CREATE TABLE `anoauxiliar` (
  `idAno` int(2) NOT NULL,
  `descricaoAno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anoauxiliar`
--

INSERT INTO `anoauxiliar` (`idAno`, `descricaoAno`) VALUES
(1, '1º TI'),
(2, '2º TI'),
(3, '3º TI');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horasgeral`
--

CREATE TABLE `horasgeral` (
  `idHorasGeral` int(50) NOT NULL,
  `ra` int(10) DEFAULT NULL,
  `horasTotal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horasgeral`
--

INSERT INTO `horasgeral` (`idHorasGeral`, `ra`, `horasTotal`) VALUES
(74, 6270, '00:00:00'),
(75, 583, '000:00:00'),
(76, 1357, '00:00:00'),
(77, 3568, '00:00:00'),
(78, 68581, '00:00:04'),
(79, 32185, '000:00:00'),
(80, 26116, '00:00:00'),
(81, 63300, '00:00:00'),
(82, 15029, '000:00:00'),
(83, 60652, '000:00:00'),
(84, 70234, '000:00:00'),
(85, 42809, '000:00:00'),
(86, 2910, '00:00:00'),
(87, 66034, '000:00:00'),
(88, 85023, '000:00:00'),
(89, 79833, '00:00:00'),
(90, 60128, '00:00:00'),
(91, 38035, '000:00:00'),
(92, 47800, '000:00:00'),
(93, 29701, '019:59:55'),
(94, 35550, '00:00:00'),
(96, 95041, '00:00:00'),
(97, 99072, '255:54:50'),
(98, 35502, '246:25:13'),
(99, 69910, '221:30:00'),
(100, 63031, '156:00:00'),
(101, 26150, '200:00:00'),
(102, 48526, '185:17:14'),
(103, 78055, '133:12:15'),
(104, 91220, '213:02:28'),
(105, 50690, '195:51:02'),
(106, 30648, '196:00:00'),
(107, 42504, '199:52:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horasgeraldetalhes`
--

CREATE TABLE `horasgeraldetalhes` (
  `idHorasGeralDetalhes` int(50) NOT NULL,
  `idHorasGeral` int(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `horaInicial` time DEFAULT NULL,
  `horaFinal` time DEFAULT NULL,
  `horaDia` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horasgeraldetalhes`
--

INSERT INTO `horasgeraldetalhes` (`idHorasGeralDetalhes`, `idHorasGeral`, `data`, `horaInicial`, `horaFinal`, `horaDia`) VALUES
(52, 93, '2019-08-01', '13:30:00', '13:29:59', '23:59:59'),
(53, 93, '2019-08-01', '13:30:00', '13:29:59', '23:59:59'),
(54, 93, '2019-08-01', '13:30:00', '13:29:59', '23:59:59'),
(56, 93, '2019-08-30', '16:01:14', '16:01:18', '00:00:04'),
(67, 100, '2019-02-04', '13:30:00', '17:30:00', '04:00:00'),
(68, 100, '2019-02-11', '13:30:00', '17:30:00', '04:00:00'),
(69, 100, '2019-02-18', '13:30:00', '17:30:00', '04:00:00'),
(70, 100, '2019-02-25', '13:30:00', '17:30:00', '04:00:00'),
(71, 100, '2019-03-04', '13:30:00', '17:30:00', '04:00:00'),
(72, 100, '2019-03-11', '13:30:00', '17:30:00', '04:00:00'),
(73, 100, '2019-03-18', '13:30:00', '17:30:00', '04:00:00'),
(74, 100, '2019-03-25', '13:30:00', '17:30:00', '04:00:00'),
(75, 100, '2019-04-01', '13:30:00', '17:30:00', '04:00:00'),
(76, 100, '2019-04-08', '13:30:00', '17:30:00', '04:00:00'),
(77, 100, '2019-04-15', '13:30:00', '17:30:00', '04:00:00'),
(78, 100, '2019-04-22', '13:30:00', '17:30:00', '04:00:00'),
(79, 100, '2019-04-29', '13:30:00', '17:30:00', '04:00:00'),
(80, 100, '2019-05-06', '13:30:00', '17:30:00', '04:00:00'),
(81, 100, '2019-05-13', '13:30:00', '17:30:00', '04:00:00'),
(82, 100, '2019-05-20', '13:30:00', '17:30:00', '04:00:00'),
(83, 100, '2019-05-27', '13:30:00', '17:30:00', '04:00:00'),
(84, 100, '2019-06-03', '13:30:00', '17:30:00', '04:00:00'),
(85, 100, '2019-06-10', '13:30:00', '17:30:00', '04:00:00'),
(86, 100, '2019-06-17', '13:30:00', '17:30:00', '04:00:00'),
(87, 100, '2019-06-24', '13:30:00', '17:30:00', '04:00:00'),
(88, 100, '2019-08-12', '13:30:00', '17:30:00', '04:00:00'),
(89, 100, '2019-08-19', '13:30:00', '17:30:00', '04:00:00'),
(90, 100, '2019-08-19', '13:30:00', '17:30:00', '04:00:00'),
(91, 100, '2019-08-26', '13:30:00', '17:30:00', '04:00:00'),
(92, 100, '2019-09-02', '13:30:00', '17:30:00', '04:00:00'),
(93, 100, '2019-09-09', '13:30:00', '17:30:00', '04:00:00'),
(94, 100, '2019-09-16', '13:30:00', '17:30:00', '04:00:00'),
(95, 100, '2019-09-23', '13:30:00', '17:30:00', '04:00:00'),
(96, 100, '2019-09-30', '13:30:00', '17:30:00', '04:00:00'),
(97, 100, '2019-10-07', '13:30:00', '17:30:00', '04:00:00'),
(98, 100, '2019-10-14', '13:30:00', '17:30:00', '04:00:00'),
(99, 100, '2019-10-21', '13:30:00', '17:30:00', '04:00:00'),
(100, 100, '2019-10-28', '13:30:00', '17:30:00', '04:00:00'),
(101, 100, '2019-11-04', '13:30:00', '17:30:00', '04:00:00'),
(102, 100, '2019-11-11', '13:30:00', '17:30:00', '04:00:00'),
(103, 100, '2019-11-18', '13:30:00', '17:30:00', '04:00:00'),
(104, 100, '2019-11-25', '13:30:00', '17:30:00', '04:00:00'),
(105, 100, '2019-12-02', '13:30:00', '17:30:00', '04:00:00'),
(106, 105, '2019-09-01', '11:17:48', '11:17:55', '00:00:07'),
(107, 78, '2019-09-02', '14:12:57', '14:13:01', '00:00:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `idLog` int(100) NOT NULL,
  `hora` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `acao` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`idLog`, `hora`, `ip`, `acao`, `usuario`) VALUES
(0, '2019-08-30 15:55:08', '::1', 'Encerrou sessÃ£o', 'admin'),
(43, '2019-08-15 21:26:47', '::1', 'Iniciou sessÃ£o', 'admin'),
(44, '2019-08-15 21:27:04', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(45, '2019-08-15 21:27:19', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(46, '2019-08-15 21:27:28', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(47, '2019-08-15 21:27:30', '::1', 'Finalizou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(48, '2019-08-15 21:27:38', '::1', 'Deletou registro de estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese referente a 2019-08-15', 'admin'),
(49, '2019-08-15 21:27:40', '::1', 'Deletou registro de estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese referente a 2019-08-22', 'admin'),
(50, '2019-08-15 21:29:04', '::1', 'Cadastrou aluno Maria Paula da Silva Nascimento', 'admin'),
(51, '2019-08-15 21:29:12', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(52, '2019-08-15 21:29:14', '::1', 'Finalizou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(53, '2019-08-15 21:29:16', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(54, '2019-08-15 21:29:25', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Maria Paula da Silva Nascimento', 'admin'),
(55, '2019-08-15 21:29:48', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-15', 'admin'),
(56, '2019-08-15 21:29:51', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-15', 'admin'),
(57, '2019-08-15 21:29:52', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-23', 'admin'),
(58, '2019-08-15 21:35:39', '::1', 'Encerrou sessÃ£o', 'admin'),
(59, '2019-08-15 21:35:42', '::1', 'Iniciou sessÃ£o', 'admin'),
(60, '2019-08-15 21:36:13', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(61, '2019-08-15 21:36:15', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(62, '2019-08-15 21:36:16', '::1', 'Finalizou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(63, '2019-08-15 21:36:17', '::1', 'Finalizou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(64, '2019-08-15 21:36:28', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(65, '2019-08-15 21:36:30', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(66, '2019-08-15 21:36:35', '::1', 'Finalizou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(67, '2019-08-15 21:36:46', '::1', 'Deletou registro de estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese referente a 2019-08-15', 'admin'),
(68, '2019-08-15 21:47:10', '::1', 'Encerrou sessÃ£o', 'admin'),
(69, '2019-08-15 21:47:15', '::1', 'Iniciou sessÃ£o', 'joao'),
(70, '2019-08-15 21:47:19', '::1', 'Encerrou sessÃ£o', 'joao'),
(71, '2019-08-15 21:47:23', '::1', 'Iniciou sessÃ£o', 'manuela'),
(72, '2019-08-15 21:48:02', '::1', 'Atualizou informaÃ§Ãµes do aluno JoÃ£o Pedro Sena Dainese', 'manuela'),
(73, '2019-08-15 21:48:06', '::1', 'Deletou registro de estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese referente a 2019-08-15', 'manuela'),
(74, '2019-08-15 21:48:11', '::1', 'Deletou registro de estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese referente a 2019-08-15', 'manuela'),
(75, '2019-08-15 21:48:40', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-15', 'manuela'),
(76, '2019-08-15 21:49:03', '::1', 'Encerrou sessÃ£o', 'manuela'),
(77, '2019-08-15 22:05:28', '::1', 'Iniciou sessÃ£o', 'admin'),
(78, '2019-08-16 13:43:08', '::1', 'Iniciou sessÃ£o', 'admin'),
(79, '2019-08-16 13:45:08', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(80, '2019-08-16 13:45:18', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(81, '2019-08-16 13:45:27', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(82, '2019-08-16 13:45:36', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(83, '2019-08-16 13:45:56', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(84, '2019-08-16 13:46:02', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(85, '2019-08-16 13:46:09', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(86, '2019-08-16 13:46:17', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(87, '2019-08-16 13:46:40', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(88, '2019-08-16 13:46:46', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(89, '2019-08-16 13:46:52', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(90, '2019-08-16 13:47:16', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(91, '2019-08-16 13:47:25', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(92, '2019-08-16 13:47:32', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(93, '2019-08-16 13:47:39', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(94, '2019-08-16 13:47:48', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(95, '2019-08-16 13:48:02', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(96, '2019-08-16 13:48:26', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(97, '2019-08-16 13:48:34', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(98, '2019-08-16 13:48:41', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(99, '2019-08-16 13:48:50', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(100, '2019-08-16 13:55:54', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(101, '2019-08-16 13:55:56', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(102, '2019-08-16 13:55:57', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(103, '2019-08-16 13:55:59', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(104, '2019-08-16 13:56:06', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-16', 'admin'),
(105, '2019-08-16 13:56:10', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(106, '2019-08-16 13:56:11', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(107, '2019-08-16 13:56:11', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(108, '2019-08-16 13:56:12', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(109, '2019-08-16 13:56:13', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(110, '2019-08-16 13:56:13', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(111, '2019-08-16 13:56:14', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(112, '2019-08-16 13:56:15', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(113, '2019-08-16 13:56:15', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(114, '2019-08-16 13:56:16', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(115, '2019-08-16 13:56:17', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(116, '2019-08-16 13:56:17', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(117, '2019-08-16 13:56:18', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(118, '2019-08-16 13:56:19', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(119, '2019-08-16 13:56:19', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(120, '2019-08-16 13:56:20', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(121, '2019-08-16 13:56:21', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(122, '2019-08-16 13:56:22', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(123, '2019-08-16 13:56:23', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(124, '2019-08-16 13:56:24', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(125, '2019-08-16 13:56:25', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(126, '2019-08-16 13:56:25', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(127, '2019-08-16 13:56:26', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(128, '2019-08-16 13:56:27', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(129, '2019-08-16 13:56:27', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(130, '2019-08-16 13:56:28', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(131, '2019-08-16 13:56:30', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(132, '2019-08-16 13:56:30', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(133, '2019-08-16 13:56:31', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(134, '2019-08-16 13:56:31', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(135, '2019-08-16 13:56:31', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(136, '2019-08-16 13:56:32', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(137, '2019-08-16 13:56:32', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(138, '2019-08-16 13:56:32', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(139, '2019-08-16 13:56:32', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(140, '2019-08-16 13:56:33', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(141, '2019-08-16 13:56:33', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(142, '2019-08-16 13:56:34', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(143, '2019-08-16 13:57:56', '::1', 'Finalizou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(144, '2019-08-16 13:57:59', '::1', 'Finalizou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(145, '2019-08-19 15:02:06', '::1', 'Tentativa malsucedida de iniciar sessÃ£o', 'admin'),
(146, '2019-08-19 15:02:09', '::1', 'Iniciou sessÃ£o', 'admin'),
(147, '2019-08-19 16:08:12', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(148, '2019-08-19 16:08:52', '::1', 'Atualizou informaÃ§Ãµes do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(149, '2019-08-19 16:10:04', '::1', 'Atualizou informaÃ§Ãµes do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(150, '2019-08-19 16:15:34', '::1', 'Iniciou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(151, '2019-08-19 16:15:36', '::1', 'Finalizou estÃ¡gio do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(152, '2019-08-19 17:16:06', '::1', 'Encerrou sessÃ£o', 'admin'),
(153, '2019-08-20 18:26:24', '::1', 'Iniciou sessÃ£o', 'admin'),
(154, '2019-08-20 19:33:31', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-16', 'admin'),
(155, '2019-08-20 19:33:33', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-16', 'admin'),
(156, '2019-08-20 19:33:35', '::1', 'Deletou registro de estÃ¡gio do aluno Maria Paula da Silva Nascimento referente a 2019-08-16', 'admin'),
(157, '2019-08-20 19:33:52', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(158, '2019-08-20 19:33:55', '::1', 'Finalizou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(159, '2019-08-20 19:42:56', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(160, '2019-08-20 19:42:57', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(161, '2019-08-20 19:42:59', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(162, '2019-08-20 19:43:01', '::1', 'Iniciou estÃ¡gio do aluno Maria Paula da Silva Nascimento', 'admin'),
(163, '2019-08-20 20:14:06', '::1', 'Gerou relatÃ³rio de horas do aluno ', 'admin'),
(164, '2019-08-20 20:15:33', '::1', 'Gerou relatÃ³rio de horas do aluno SELECT nome FROM aluno WHERE ra = 1', 'admin'),
(165, '2019-08-20 20:18:27', '::1', 'Gerou relatÃ³rio de horas do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(166, '2019-08-20 20:19:29', '::1', 'Gerou relatÃ³rio de horas do aluno JoÃ£o Pedro Sena Dainese, 2019-08-01 atÃ© 2019-08-31', 'admin'),
(167, '2019-08-20 20:19:52', '::1', 'Gerou relatÃ³rio de horas do aluno JoÃ£o Pedro Sena Dainese, referente a 2019-08-01 atÃ© 2019-08-31', 'admin'),
(168, '2019-08-20 20:21:39', '::1', 'Gerou relatÃ³rio de horas geral do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(169, '2019-08-20 20:21:50', '::1', 'Gerou relatÃ³rio de horas geral do aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(170, '2019-08-20 20:28:33', '::1', 'Gerou relatÃ³rio de horas do Terceiro Ano', 'admin'),
(171, '2019-08-20 20:30:30', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', 'admin'),
(172, '2019-08-20 20:30:45', '::1', 'Gerou relatÃ³rio de horas do Segundo Ano', 'admin'),
(173, '2019-08-20 20:30:54', '::1', 'Gerou relatÃ³rio de horas do Segundo Ano', 'admin'),
(174, '2019-08-20 20:31:18', '::1', 'Gerou relatÃ³rio de horas do Segundo Ano', 'admin'),
(175, '2019-08-20 20:37:44', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', 'admin'),
(176, '2019-08-20 20:37:49', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', 'admin'),
(177, '2019-08-20 20:38:08', '::1', 'Encerrou sessÃ£o', 'admin'),
(178, '2019-08-20 20:38:11', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', ''),
(179, '2019-08-20 20:38:20', '::1', 'Iniciou sessÃ£o', 'admin'),
(180, '2019-08-20 21:02:08', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(181, '2019-08-20 21:02:16', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(182, '2019-08-20 21:02:25', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(183, '2019-08-20 21:03:13', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(184, '2019-08-20 21:03:47', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese2', 'admin'),
(185, '2019-08-20 21:05:25', '::1', 'Cadastrou aluno JoÃ£o Pedro Sena Dainese3', 'admin'),
(186, '2019-08-30 07:41:43', '::1', 'Iniciou sessÃ£o', 'admin'),
(187, '2019-08-30 07:42:17', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(188, '2019-08-30 07:42:26', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(189, '2019-08-30 07:42:33', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(190, '2019-08-30 07:42:45', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(191, '2019-08-30 07:42:51', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(192, '2019-08-30 07:42:56', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(193, '2019-08-30 07:43:33', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(194, '2019-08-30 07:43:39', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(195, '2019-08-30 07:43:44', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(196, '2019-08-30 07:43:50', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(197, '2019-08-30 07:43:55', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(198, '2019-08-30 07:44:01', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(199, '2019-08-30 07:44:05', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(200, '2019-08-30 07:44:10', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(201, '2019-08-30 07:44:14', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(202, '2019-08-30 07:44:19', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(203, '2019-08-30 07:44:25', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(204, '2019-08-30 07:44:29', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(205, '2019-08-30 07:44:33', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(206, '2019-08-30 07:44:38', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(207, '2019-08-30 07:44:42', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(208, '2019-08-30 07:44:46', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(209, '2019-08-30 07:44:50', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(210, '2019-08-30 07:44:55', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese', 'admin'),
(211, '2019-08-30 07:45:00', '::1', 'Deletou aluno JoÃ£o Pedro Sena Dainese3', 'admin'),
(212, '2019-08-30 07:45:04', '::1', 'Deletou aluno Maria Paula da Silva Nascimento', 'admin'),
(213, '2019-08-30 07:47:53', '::1', 'Cadastrou aluno Douglas Silva Pereira', 'admin'),
(214, '2019-08-30 07:49:21', '::1', 'Cadastrou aluno Erick Souza Fernandes', 'admin'),
(215, '2019-08-30 07:51:30', '::1', 'Cadastrou aluno Luiza Ribeiro Cavalcanti', 'admin'),
(216, '2019-08-30 07:53:43', '::1', 'Cadastrou aluno Miguel Silva Almeida', 'admin'),
(217, '2019-08-30 07:55:12', '::1', 'Cadastrou aluno Beatriz Cardoso Araujo', 'admin'),
(218, '2019-08-30 07:58:50', '::1', 'Cadastrou aluno Gabriela Ferreira Alves', 'admin'),
(219, '2019-08-30 08:01:35', '::1', 'Cadastrou aluno Giovanna Gomes Rocha', 'admin'),
(220, '2019-08-30 08:03:44', '::1', 'Cadastrou aluno VitÃ³r Santos Barros', 'admin'),
(221, '2019-08-30 08:05:24', '::1', 'Cadastrou aluno Sarah GonÃ§alves Oliveira', 'admin'),
(222, '2019-08-30 08:06:56', '::1', 'Cadastrou aluno Guilherme Rodrigues Carvalho', 'admin'),
(223, '2019-08-30 08:09:47', '::1', 'Cadastrou aluno LuÃ­s Alves Costa', 'admin'),
(224, '2019-08-30 08:11:09', '::1', 'Cadastrou aluno Luis Azevedo Castro', 'admin'),
(225, '2019-08-30 08:12:25', '::1', 'Cadastrou aluno Evelyn Sousa Pinto', 'admin'),
(226, '2019-08-30 08:15:04', '::1', 'Cadastrou aluno VitÃ³ria Cavalcanti Rodrigues', 'admin'),
(227, '2019-08-30 08:17:38', '::1', 'Cadastrou aluno Carlos Pinto Almeida', 'admin'),
(228, '2019-08-30 08:19:49', '::1', 'Cadastrou aluno Tiago Correia Gomes', 'admin'),
(229, '2019-08-30 08:20:28', '::1', 'Atualizou informaÃ§Ãµes do aluno Tiago Correia Gomes', 'admin'),
(230, '2019-08-30 08:23:34', '::1', 'Cadastrou aluno KauÃª Lima Araujo', 'admin'),
(231, '2019-08-30 08:25:12', '::1', 'Cadastrou aluno Leila Pereira Cunha', 'admin'),
(232, '2019-08-30 08:26:33', '::1', 'Cadastrou aluno Vitor Cavalcanti Souza', 'admin'),
(233, '2019-08-30 08:58:51', '::1', 'Iniciou sessÃ£o', 'admin'),
(234, '2019-08-30 09:01:35', '::1', 'Cadastrou aluno AndrÃ© Pereira Araujo', 'admin'),
(235, '2019-08-30 09:04:13', '::1', 'Cadastrou aluno Leonardo Ferreira Silva', 'admin'),
(236, '2019-08-30 09:14:46', '::1', 'Cadastrou aluno 11', 'admin'),
(237, '2019-08-30 09:15:21', '::1', 'Deletou a turma de formandos atual', 'admin'),
(238, '2019-08-30 09:18:43', '::1', 'Cadastrou aluno JÃºlia Melo Castro', 'admin'),
(239, '2019-08-30 09:22:55', '::1', 'Encerrou sessÃ£o', 'admin'),
(240, '2019-08-30 09:23:08', '::1', 'Iniciou sessÃ£o', 'admin'),
(241, '2019-08-30 09:23:54', '::1', 'Gerou relatÃ³rio de horas totais do aluno AndrÃ© Pereira Araujo', 'admin'),
(242, '2019-08-30 09:26:08', '::1', 'Encerrou sessÃ£o', 'admin'),
(243, '2019-08-30 09:26:14', '::1', 'Iniciou sessÃ£o', 'admin'),
(244, '2019-08-30 09:29:37', '::1', 'Cadastrou aluno Rafael Cunha Alves', 'admin'),
(245, '2019-08-30 09:31:49', '::1', 'Cadastrou aluno Erick Cunha Rocha', 'admin'),
(246, '2019-08-30 09:33:08', '::1', 'Cadastrou aluno Yasmin Barros Carvalho', 'admin'),
(247, '2019-08-30 09:34:12', '::1', 'Cadastrou aluno Daniel Almeida Melo', 'admin'),
(248, '2019-08-30 09:37:27', '::1', 'Cadastrou aluno Vinicius Santos Dias', 'admin'),
(249, '2019-08-30 09:41:56', '::1', 'Cadastrou aluno Sarah Barros Fernandes', 'admin'),
(250, '2019-08-30 09:44:45', '::1', 'Cadastrou aluno KauÃª Santos Costa', 'admin'),
(251, '2019-08-30 09:46:13', '::1', 'Cadastrou aluno Gabriela Costa Barbosa', 'admin'),
(252, '2019-08-30 09:47:25', '::1', 'Cadastrou aluno VinÃ­cius Costa Sousa', 'admin'),
(253, '2019-08-30 09:48:29', '::1', 'Cadastrou aluno Julia Pereira Souza', 'admin'),
(254, '2019-08-30 09:49:35', '::1', 'Cadastrou aluno Erick Dias Barbosa', 'admin'),
(255, '2019-08-30 15:55:21', '::1', 'Iniciou sessÃ£o', 'admin'),
(256, '2019-08-30 15:59:33', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(257, '2019-08-30 16:00:01', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(258, '2019-08-30 16:00:17', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(259, '2019-08-30 16:00:35', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(260, '2019-08-30 16:00:46', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(261, '2019-08-30 16:00:56', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno AndrÃ© Pereira Araujo', 'admin'),
(262, '2019-08-30 16:01:01', '::1', 'Iniciou estÃ¡gio do aluno AndrÃ© Pereira Araujo', 'admin'),
(263, '2019-08-30 16:01:06', '::1', 'Finalizou estÃ¡gio do aluno AndrÃ© Pereira Araujo', 'admin'),
(264, '2019-08-30 16:01:14', '::1', 'Iniciou estÃ¡gio do aluno AndrÃ© Pereira Araujo', 'admin'),
(265, '2019-08-30 16:01:18', '::1', 'Finalizou estÃ¡gio do aluno AndrÃ© Pereira Araujo', 'admin'),
(266, '2019-08-30 16:01:55', '::1', 'Deletou registro de estÃ¡gio do aluno AndrÃ© Pereira Araujo referente a 2001-01-01', 'admin'),
(267, '2019-08-30 16:01:58', '::1', 'Deletou registro de estÃ¡gio do aluno AndrÃ© Pereira Araujo referente a 2001-01-01', 'admin'),
(268, '2019-08-30 16:02:21', '::1', 'Atualizou informaÃ§Ãµes do aluno AndrÃ© Pereira Araujo', 'admin'),
(269, '2019-08-30 16:02:26', '::1', 'Deletou registro de estÃ¡gio do aluno AndrÃ© Pereira Araujo referente a 2019-08-01', 'admin'),
(270, '2019-08-30 16:02:45', '::1', 'Atualizou informaÃ§Ãµes do aluno AndrÃ© Pereira Araujo', 'admin'),
(271, '2019-08-30 16:02:52', '::1', 'Deletou registro de estÃ¡gio do aluno AndrÃ© Pereira Araujo referente a 2019-08-30', 'admin'),
(272, '2019-09-01 08:31:01', '::1', 'Iniciou sessÃ£o', 'admin'),
(273, '2019-09-01 08:31:23', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(274, '2019-09-01 08:31:39', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(275, '2019-09-01 08:31:57', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(276, '2019-09-01 08:32:07', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(277, '2019-09-01 08:32:20', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(278, '2019-09-01 08:32:34', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(279, '2019-09-01 08:33:25', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(280, '2019-09-01 08:33:40', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(281, '2019-09-01 08:33:49', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(282, '2019-09-01 08:33:52', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(283, '2019-09-01 08:34:04', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(284, '2019-09-01 08:34:15', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(285, '2019-09-01 08:38:03', '::1', 'Iniciou estÃ¡gio do aluno Daniel Almeida Melo', 'admin'),
(286, '2019-09-01 08:38:07', '::1', 'Finalizou estÃ¡gio do aluno Daniel Almeida Melo', 'admin'),
(287, '2019-09-01 08:38:21', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(288, '2019-09-01 08:38:32', '::1', 'Iniciou estÃ¡gio do aluno Daniel Almeida Melo', 'admin'),
(289, '2019-09-01 08:38:41', '::1', 'Finalizou estÃ¡gio do aluno Daniel Almeida Melo', 'admin'),
(290, '2019-09-01 08:39:06', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(291, '2019-09-01 08:39:26', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(292, '2019-09-01 08:39:36', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(293, '2019-09-01 08:39:48', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(294, '2019-09-01 08:39:54', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(295, '2019-09-01 08:40:03', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(296, '2019-09-01 08:40:09', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(297, '2019-09-01 08:40:16', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(298, '2019-09-01 08:40:27', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(299, '2019-09-01 08:40:31', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(300, '2019-09-01 08:40:34', '::1', 'Deletou registro de estÃ¡gio do aluno Daniel Almeida Melo referente a 2019-09-01', 'admin'),
(301, '2019-09-01 08:40:48', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(302, '2019-09-01 08:40:56', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(303, '2019-09-01 08:42:53', '::1', 'Atualizou informaÃ§Ãµes do aluno Daniel Almeida Melo', 'admin'),
(304, '2019-09-01 09:04:55', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(305, '2019-09-01 09:05:10', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(306, '2019-09-01 09:05:23', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(307, '2019-09-01 09:05:35', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(308, '2019-09-01 09:05:55', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(309, '2019-09-01 09:06:17', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(310, '2019-09-01 09:06:37', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(311, '2019-09-01 09:06:57', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(312, '2019-09-01 09:07:11', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(313, '2019-09-01 09:08:23', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(314, '2019-09-01 09:08:32', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(315, '2019-09-01 09:08:40', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(316, '2019-09-01 09:08:50', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(317, '2019-09-01 09:09:04', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(318, '2019-09-01 09:09:23', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(319, '2019-09-01 09:09:35', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(320, '2019-09-01 09:09:45', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(321, '2019-09-01 09:09:59', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(322, '2019-09-01 09:10:22', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(323, '2019-09-01 09:10:34', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(324, '2019-09-01 09:10:43', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(325, '2019-09-01 09:10:55', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(326, '2019-09-01 09:11:25', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(327, '2019-09-01 09:11:40', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(328, '2019-09-01 09:11:56', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(329, '2019-09-01 09:12:11', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(330, '2019-09-01 09:12:23', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(331, '2019-09-01 09:12:33', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(332, '2019-09-01 09:13:11', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(333, '2019-09-01 09:13:23', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(334, '2019-09-01 09:13:33', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(335, '2019-09-01 09:13:44', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(336, '2019-09-01 09:13:54', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(337, '2019-09-01 09:14:03', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(338, '2019-09-01 09:14:17', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(339, '2019-09-01 09:14:26', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(340, '2019-09-01 09:14:35', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(341, '2019-09-01 09:14:47', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(342, '2019-09-01 09:14:56', '::1', 'Inseriu horas de estÃ¡gio manualmente para o aluno Daniel Almeida Melo', 'admin'),
(343, '2019-09-01 09:16:27', '::1', 'Encerrou sessÃ£o', 'admin'),
(344, '2019-09-01 09:17:07', '::1', 'Iniciou sessÃ£o', 'admin'),
(345, '2019-09-01 09:18:32', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', 'admin'),
(346, '2019-09-01 09:18:40', '::1', 'Gerou relatÃ³rio de horas do Terceiro Ano', 'admin'),
(347, '2019-09-01 10:53:39', '::1', 'Gerou relatÃ³rio de horas totais do aluno Daniel Almeida Melo', 'admin'),
(348, '2019-09-01 11:12:41', '::1', 'Atualizou informaÃ§Ãµes do aluno Erick Cunha Rocha', 'admin'),
(349, '2019-09-01 11:13:06', '::1', 'Atualizou informaÃ§Ãµes do aluno Erick Dias Barbosa', 'admin'),
(350, '2019-09-01 11:13:31', '::1', 'Atualizou informaÃ§Ãµes do aluno Gabriela Costa Barbosa', 'admin'),
(351, '2019-09-01 11:13:51', '::1', 'Atualizou informaÃ§Ãµes do aluno Julia Pereira Souza', 'admin'),
(352, '2019-09-01 11:14:38', '::1', 'Atualizou informaÃ§Ãµes do aluno KauÃª Santos Costa', 'admin'),
(353, '2019-09-01 11:14:49', '::1', 'Atualizou informaÃ§Ãµes do aluno KauÃª Santos Costa', 'admin'),
(354, '2019-09-01 11:15:12', '::1', 'Atualizou informaÃ§Ãµes do aluno Rafael Cunha Alves', 'admin'),
(355, '2019-09-01 11:15:33', '::1', 'Atualizou informaÃ§Ãµes do aluno Sarah Barros Fernandes', 'admin'),
(356, '2019-09-01 11:17:14', '::1', 'Atualizou informaÃ§Ãµes do aluno Vinicius Santos Dias', 'admin'),
(357, '2019-09-01 11:17:34', '::1', 'Atualizou informaÃ§Ãµes do aluno VinÃ­cius Costa Sousa', 'admin'),
(358, '2019-09-01 11:17:48', '::1', 'Iniciou estÃ¡gio do aluno VinÃ­cius Costa Sousa', 'admin'),
(359, '2019-09-01 11:17:55', '::1', 'Finalizou estÃ¡gio do aluno VinÃ­cius Costa Sousa', 'admin'),
(360, '2019-09-01 11:18:39', '::1', 'Atualizou informaÃ§Ãµes do aluno Yasmin Barros Carvalho', 'admin'),
(361, '2019-09-01 11:18:48', '::1', 'Gerou relatÃ³rio de horas do Terceiro Ano', 'admin'),
(362, '2019-09-01 11:34:52', '::1', 'Passou a turma de 1Âº Ano para o ano seguinte', 'admin'),
(363, '2019-09-01 11:52:54', '::1', 'Encerrou sessÃ£o', 'admin'),
(364, '2019-09-02 13:40:10', '::1', 'Iniciou sessÃ£o', 'admin'),
(365, '2019-09-02 13:44:34', '::1', 'Atualizou informaÃ§Ãµes do aluno VitÃ³ria Cavalcanti Rodrigues', 'admin'),
(366, '2019-09-02 13:44:49', '::1', 'Atualizou informaÃ§Ãµes do aluno AndrÃ© Pereira Araujo', 'admin'),
(367, '2019-09-02 13:44:57', '::1', 'Atualizou informaÃ§Ãµes do aluno Carlos Pinto Almeida', 'admin'),
(368, '2019-09-02 13:45:03', '::1', 'Atualizou informaÃ§Ãµes do aluno Erick Souza Fernandes', 'admin'),
(369, '2019-09-02 13:45:12', '::1', 'Atualizou informaÃ§Ãµes do aluno Gabriela Ferreira Alves', 'admin'),
(370, '2019-09-02 13:45:18', '::1', 'Atualizou informaÃ§Ãµes do aluno Guilherme Rodrigues Carvalho', 'admin'),
(371, '2019-09-02 13:45:24', '::1', 'Atualizou informaÃ§Ãµes do aluno Leila Pereira Cunha', 'admin'),
(372, '2019-09-02 13:45:30', '::1', 'Atualizou informaÃ§Ãµes do aluno Luis Azevedo Castro', 'admin'),
(373, '2019-09-02 13:45:36', '::1', 'Atualizou informaÃ§Ãµes do aluno LuÃ­s Alves Costa', 'admin'),
(374, '2019-09-02 13:45:43', '::1', 'Atualizou informaÃ§Ãµes do aluno Sarah GonÃ§alves Oliveira', 'admin'),
(375, '2019-09-02 13:45:49', '::1', 'Atualizou informaÃ§Ãµes do aluno Vitor Cavalcanti Souza', 'admin'),
(376, '2019-09-02 14:12:57', '::1', 'Iniciou estÃ¡gio do aluno Beatriz Cardoso Araujo', 'admin'),
(377, '2019-09-02 14:13:01', '::1', 'Finalizou estÃ¡gio do aluno Beatriz Cardoso Araujo', 'admin'),
(378, '2019-09-02 14:14:23', '::1', 'Gerou relatÃ³rio de horas do Primeiro Ano', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ra`),
  ADD KEY `idAno` (`idAno`);

--
-- Indexes for table `anoauxiliar`
--
ALTER TABLE `anoauxiliar`
  ADD PRIMARY KEY (`idAno`);

--
-- Indexes for table `horasgeral`
--
ALTER TABLE `horasgeral`
  ADD PRIMARY KEY (`idHorasGeral`),
  ADD KEY `ra` (`ra`);

--
-- Indexes for table `horasgeraldetalhes`
--
ALTER TABLE `horasgeraldetalhes`
  ADD PRIMARY KEY (`idHorasGeralDetalhes`),
  ADD KEY `idHorasGeral` (`idHorasGeral`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`idLog`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `horasgeral`
--
ALTER TABLE `horasgeral`
  MODIFY `idHorasGeral` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `horasgeraldetalhes`
--
ALTER TABLE `horasgeraldetalhes`
  MODIFY `idHorasGeralDetalhes` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `idLog` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idAno`) REFERENCES `anoauxiliar` (`idAno`);

--
-- Limitadores para a tabela `horasgeral`
--
ALTER TABLE `horasgeral`
  ADD CONSTRAINT `horasgeral_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `aluno` (`ra`);

--
-- Limitadores para a tabela `horasgeraldetalhes`
--
ALTER TABLE `horasgeraldetalhes`
  ADD CONSTRAINT `horasgeraldetalhes_ibfk_1` FOREIGN KEY (`idHorasGeral`) REFERENCES `horasgeral` (`idHorasGeral`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
