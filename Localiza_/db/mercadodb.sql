-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 23:04
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercadodb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `CategoriaID` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`CategoriaID`, `nome`) VALUES
(1, 'Bebidas'),
(2, 'Alimentos'),
(3, 'Padaria'),
(4, 'Cereais e grãos'),
(5, 'Congelados e Frios'),
(6, 'Hortifruit'),
(7, 'Limpeza'),
(8, 'Higiene Pessoal'),
(9, 'Papelaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL DEFAULT '',
  `Descricao` varchar(500) NOT NULL DEFAULT '',
  `Preco` varchar(15) NOT NULL DEFAULT '',
  `Prateleira` varchar(3) NOT NULL DEFAULT '',
  `Corredor` varchar(5) NOT NULL DEFAULT '',
  `Imagem` varchar(200) NOT NULL DEFAULT '',
  `Ativo` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
  `CategoriaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Preco`, `Prateleira`, `Corredor`, `Imagem`, `Ativo`, `CategoriaID`) VALUES
(1, 'Água Mineral Sem Gás 500ml', 'Água Mineral Sem Gás 500ml', '1,45', 'E', '11', 'agua.png', 1, 1),
(2, 'Champagne Taittinger Reserve Brut 750ml', 'Champagne Taittinger Reserve Brut 750ml', '430,90', 'A', '11', 'champagne.png', 1, 1),
(3, 'Refrigerante Coca Cola Pet 2l', 'Refrigerante Coca Cola Pet 2l', '8,00', 'D', '11', 'coca.png', 1, 1),
(4, 'Refrigerante Guaraná Antarctica Lata 350ml', 'Refrigerante Guaraná Antarctica Lata 350ml', '2,59', 'A', '10', 'guarana.png', 1, 1),
(5, 'Refrigerante PEPSI Lata 350ml', 'Refrigerante PEPSI Lata 350ml', '2,00', 'B', '10', 'pepsi.png', 1, 1),
(6, 'Suco Integral Laranja Natural One Ambiente Garrafa 1,5l', 'Suco Integral Laranja Natural One Ambiente Garrafa 1,5l', '11,00', 'C', '10', 'suco_laranja.png', 1, 1),
(7, 'SUCO DE UVA TINTO INTEGRAL AURORA 1,5L', 'SUCO DE UVA TINTO INTEGRAL AURORA 1,5L', '18,00', 'D', '11', 'suco_uva.png', 1, 1),
(8, 'Suco em Pó de Laranja Tang 25g', 'Suco em Pó de Laranja Tang 25g', '0,80', 'B', '11', 'tang.png', 1, 1),
(9, 'Bebida Láctea Uht Chocolate Toddynho Caixa 200Ml', 'Bebida Láctea Uht Chocolate Toddynho Caixa 200Ml', '3,00', 'B', '11', 'toddynho.png', 1, 1),
(10, 'Whiskey Jack Daniels 1 L\r\n\r\n\r\n', 'Whiskey Jack Daniels 1 L\r\n\r\n\r\n', '134,90', 'C', '10', 'whiski.png', 1, 1),
(11, 'INTEGRAL GRANOLA TRADICIONAL JASMINE - 1000g', 'INTEGRAL GRANOLA TRADICIONAL - 1000g', '21,69', 'A', '1', 'granola.png', 1, 4),
(12, 'Cereal Matinal Froot Loops Kellogs 230g\r\n', 'Cereal Matinal Froot Loops Kellogs 230g\r\n', '24,90', '1 ', 'B', 'frootloops.png', 1, 4),
(13, 'Nescau Nestlé Cereal Matinal com 270g', 'Nescau Nestlé Cereal Matinal com 270g', '22,90', 'D', '1', 'nescau.png', 1, 4),
(14, 'Cheerios Mel - 270g', 'Cheerios Mel - 270g', '5,00', 'B', '1', 'cheerios.png', 1, 4),
(15, 'Semente de Girassol Tostada - VITAO', 'Semente de Girassol Tostada - VITAO', '10,00', 'C', '1', 'girassol.png', 1, 4),
(16, 'QUINOA REAL GRÃOS ORGÂNICA VITALIN 250G', 'QUINOA REAL GRÃOS ORGÂNICA VITALIN 250G', '26,19', 'A', '1', 'quinoa.png', 1, 4),
(17, 'Semente de Chia Ceifeiro - 100g', 'Semente de Chia Ceifeiro - 100g', '23,00', 'B', '1', 'chia.png', 1, 4),
(18, 'FARINHA DE CENTEIO INTEGRAL VITAO 500G', 'FARINHA DE CENTEIO INTEGRAL VITAO 500G', '7,00', 'C', '1', 'farinha.png', 1, 4),
(19, 'Arroz Agulhinha Tipo 1 CAMIL Pacote 1kg', 'Arroz Agulhinha Tipo 1 CAMIL Pacote 1kg', '21,99', 'A', '1', 'arroz.png', 1, 4),
(20, 'Trigo em Grão Grings 500g', 'Trigo em Grão Grings 500g', '7,50', 'B', '1', 'trigo.png', 1, 4),
(21, 'Pão Doce', 'Pão Doce', '12,90', 'E', '2', 'paodoce.png', 1, 3),
(22, 'Pão Francês - Cesta', 'Cesta de pães franceses', '8,90', 'E', '2', 'paofrances.png', 1, 3),
(23, 'Pão de Forma Visconti Tradicional - Pacote com 400g', 'Pão de Forma Visconti Tradicional - Pacote com 400g', '4,99', 'G', '2', 'paodeforma.png', 1, 3),
(24, 'Quindim', 'Quindim', '3,90', 'H', '2', 'quindin.png', 1, 3),
(25, 'Torta de Limão', 'Torta de Limão', '30,00', 'B', '3', 'tortadelimao.png', 1, 3),
(26, 'Coxinha', 'Coxinha', '4,99', 'C', '3', 'coxinha.png', 1, 3),
(27, 'Bolinha de Queijo - KG', 'Bolinha de Queijo', '34,90', 'D', '3', 'bolinhadequeijo.png', 1, 3),
(28, 'Croquete', 'Croquete', '3,50', 'G', '2', 'croquete.png', 1, 3),
(29, 'Sanduíche Natural', 'Sanduíche Natural', '7,90', 'C', '3', 'sanduichenatural.png', 1, 3),
(34, 'Álcool ', 'ÁLCOOL ETÍLICO HIDRATADO 70% 70 INPM PROLINK', '8,15', 'F', '9', 'alcool.png', 1, 7),
(35, 'Detergente', 'Detergente Líquido Neutro Ypê 500ml', '10,00', 'A', '9', 'detergente.jpg', 0, 7),
(36, 'Sabão', 'SABÃO BARRA NEUTRO C/ 5UN (1KG) - YPE', '3,00', 'A', '9', 'sabao.jpg', 1, 7),
(37, 'Sabão de coco', 'SABÃO DE COCO BARRA 500G', '3,40', 'A', '9', 'sabaococo.jpg', 1, 7),
(38, 'Limpa Vidros', 'Facilita Limpa Vidros - AudaxCo', '15,30', 'E', '9', 'limpavidros.jpg', 1, 7),
(39, 'Luva de Borracha', 'Luva de borracha amarela ', '5,99', 'E', '9', 'luvas.jpg', 1, 7),
(40, 'Desinfetante', 'Desinfetantes Química', '15,20', 'F', '9', 'desinfetantes.jpg', 1, 7),
(41, 'Pano de Chão', 'Pano de chão xadrez', '6,60', 'E', '9', 'pano.jpg', 1, 7),
(42, 'Balde', 'Balde azul', '5,90', 'E', '9', 'balde.png', 1, 7),
(43, 'Esponja', 'Esponja amarela bom bril avulsa ', '2,40', 'E', '9', 'esponja.jpg', 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioID` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(30) NOT NULL DEFAULT '',
  `Senha` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`UsuarioID`, `Nome`, `Senha`) VALUES
(1, 'Julia', '1234567');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`),
  ADD KEY `CategoriaID` (`CategoriaID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`CategoriaID`) REFERENCES `categoria` (`CategoriaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
