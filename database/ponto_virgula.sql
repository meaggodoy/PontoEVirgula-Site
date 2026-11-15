-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/11/2026 às 18:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ponto_virgula`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id_livro` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `capa` varchar(255) DEFAULT NULL,
  `categoria` varchar(60) DEFAULT NULL,
  `destaque` tinyint(1) DEFAULT 0,
  `ativo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `titulo`, `autor`, `descricao`, `preco`, `capa`, `categoria`, `destaque`, `ativo`) VALUES
(1, 'A elegância do ouriço', 'Muriel Barbery', 'Uma história sobre encontros, sensibilidade e a beleza das pequenas coisas.', 59.90, '/PontoEVirgula-Site/assets/img/livros/ourico.jpg', 'Literatura', 1, 1),
(2, 'A biblioteca da meia-noite', 'Matt Haig', 'Uma narrativa sobre escolhas, possibilidades e os caminhos da vida.', 54.90, '/PontoEVirgula-Site/assets/img/livros/biblioteca.jpg', 'Ficção', 1, 1),
(3, 'Dias de abandono', 'Elena Ferrante', 'Uma narrativa intensa sobre identidade, relações e recomeços.', 49.90, '/PontoEVirgula-Site/assets/img/livros/abandono.jpg', 'Literatura', 0, 1),
(4, 'Torto Arado', 'Itamar Vieira Junior', 'Uma narrativa sobre memória, identidade e relações familiares no sertão baiano.', 59.90, '/PontoEVirgula-Site/assets/img/livros/torto-arado.jpg', 'Literatura', 0, 1),
(5, 'Quarto de Despejo', 'Carolina Maria de Jesus', 'Um diário marcante sobre a vida na favela e as desigualdades sociais.', 49.90, '/PontoEVirgula-Site/assets/img/livros/quarto-de-despejo.jpg', 'Literatura', 0, 1),
(6, 'A Hora da Estrela', 'Clarice Lispector', 'A história de Macabéa e suas experiências de invisibilidade e existência.', 39.90, '/PontoEVirgula-Site/assets/img/livros/a-hora-da-estrela.jpg', 'Literatura', 0, 1),
(7, 'Dom Casmurro', 'Machado de Assis', 'Um clássico da literatura brasileira sobre memória, ciúme e dúvidas.', 42.90, '/PontoEVirgula-Site/assets/img/livros/dom-casmurro.jpg', 'Literatura', 0, 1),
(8, 'O Avesso da Pele', 'Jeferson Tenório', 'Uma história sobre relações familiares, identidade e questões raciais.', 54.90, '/PontoEVirgula-Site/assets/img/livros/o-avesso-da-pele.jpg', 'Literatura', 0, 1),
(9, 'Orgulho e Preconceito', 'Jane Austen', 'Um romance clássico sobre amor, costumes e diferenças sociais.', 49.90, '/PontoEVirgula-Site/assets/img/livros/orgulho-e-preconceito.jpg', 'Romance', 0, 1),
(10, 'Persuasão', 'Jane Austen', 'Uma narrativa sobre escolhas, amadurecimento e segundas oportunidades.', 44.90, '/PontoEVirgula-Site/assets/img/livros/persuasao.jpg', 'Romance', 0, 1),
(11, 'A Vida Invisível de Eurídice Gusmão', 'Martha Batalha', 'Uma narrativa sobre expectativas sociais e a vida de duas irmãs.', 52.90, '/PontoEVirgula-Site/assets/img/livros/a-vida-invisivel-de-euridice-gusmao.jpg', 'Romance', 1, 1),
(12, 'O Conto da Aia', 'Margaret Atwood', 'Uma distopia sobre poder, controle e liberdade individual.', 59.90, '/PontoEVirgula-Site/assets/img/livros/o-conto-da-aia.jpg', 'Ficção', 0, 1),
(13, 'Fahrenheit 451', 'Ray Bradbury', 'Uma distopia sobre censura, conhecimento e liberdade de pensamento.', 46.90, '/PontoEVirgula-Site/assets/img/livros/fahrenheit-451.jpg', 'Ficção', 1, 1),
(14, 'Cem Anos de Solidão', 'Gabriel García Márquez', 'A história de várias gerações da família Buendía em Macondo.', 64.90, '/PontoEVirgula-Site/assets/img/livros/cem-anos-de-solidao.jpg', 'Ficção', 0, 1),
(15, 'O Pequeno Príncipe', 'Antoine de Saint-Exupéry', 'Uma narrativa poética sobre amizade, afeto e o olhar sobre o mundo.', 39.90, '/PontoEVirgula-Site/assets/img/livros/o-pequeno-principe.jpg', 'Literatura', 0, 1),
(16, 'Alguma Poesia', 'Carlos Drummond de Andrade', 'Uma coletânea de poemas sobre cotidiano, sentimentos e existência.', 42.90, '/PontoEVirgula-Site/assets/img/livros/alguma-poesia.jpg', 'Poesia', 0, 1),
(17, 'Sapiens', 'Yuval Noah Harari', 'Uma reflexão sobre a trajetória da humanidade e suas transformações.', 69.90, '/PontoEVirgula-Site/assets/img/livros/sapiens.jpg', 'Não ficção', 0, 1),
(18, 'A Coragem de Ser Imperfeito', 'Brené Brown', 'Uma reflexão sobre vulnerabilidade, autenticidade e aceitação.', 54.90, '/PontoEVirgula-Site/assets/img/livros/a-coragem-de-ser-imperfeito.jpg', 'Não ficção', 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
