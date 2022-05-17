-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2022 às 02:52
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `videogame`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consoles`
--

CREATE TABLE `consoles` (
  `id` int(40) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `valor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consoles`
--

INSERT INTO `consoles` (`id`, `fabricante`, `modelo`, `descricao`, `valor`) VALUES
(1, 'Sony', 'Playstation 5', 'Processador octa-core AMD de arquitetura Zen 2 (7 nm), com clock de até 3,5 GHz, Chip gráfico: GPU customizada RDNA 2 com 36 unidades computacionais, clock de até 2,23 GHz e 10,28 Tflop/s, Memória RAM de 16 GB GDDR6.', 6500),
(2, 'Sony', 'Playstation 4', 'Sistema operacional: Orbis OS, CPU 1.6 GHz 8-core AMD Jaguar, GPU\r\n1.84 TFLOP AMD Radeon (18 Computer Units, 800 MHz), Memoria Interna 500 GB ou 1 TB,RAM 8 GB GDDR5 (compartilhado).', 2390),
(3, 'Microsoft', 'Xbox Series X', 'Processador (CPU): AMD Zen 2 customizado com 8 núcleos e 16 threads a até 3,8 GHz, Placa de vídeo (GPU): 52 UCs a até 1,825 GHz (12 TFLOPS), Arquitetura do chip gráfico: RDNA 2 customizada, Interface de memória: 16 GB GDDR6 (256-bit), Largura de memória: 10 GB em 560 GB/s, 6 GB em 336 GB/s, Armazenamento interno: 1 TB de SSD NVMe customizado, Velocidade de transferência de arquivos: 2,4 GB/s (raw), 4,8 GB/s (comprimido), Armazenamento expansível: slot para SSD NVMe prioritário de 1 TB.', 5520),
(4, 'Microsoft', 'Xbox Series S', 'Resolução máxima de mídia: 4K,Resolução máxima de jogos:1440p, Processador: AMD Zen 2,Memória RAM: 10 GB, Armazenamento: SSD, Capacidade de armazenamento: 512 GB.', 2599),
(5, 'Microsoft', 'Xbox One S', 'Processador x86-64 AMD APU \"Jaguar\" Octa-Core 1,75 até 2,86 GHz, 8GB de memória RAM DDR3; e 32MB da ESRAM, GPU AMD Radeon GCN 768 cores 853 MHz 1,31 TFLOPS, HD de 500GB, 7.1 surround sound;[27] Dolby Atmos.', 3599),
(6, 'Namco Bandai', 'Jogo: Elden Ring - Ps5', 'Exploração do mundo nas Terras Intermédias: ELDEN RING apresenta vastos cenários fantásticos e complexas e escuras masmorras que se conectam de maneira fluida\r\nViaje pelo mundo de tirar o fôlego a pé ou a cavalo, sozinho ou on-line, e mergulhe completamente em planícies gramadas\r\nPântanos sufocantes, montanhas tortuosas, castelos agourentos e outros locais grandiosos, nunca antes\r\nJogabilidade definidora de gênero: Crie seu personagem, defina seu estilo de jogo experimentando uma grande variedade de armas, magias e habilidades encontradas pelo mundo.', 263),
(7, 'Sony ', 'Jogo: Horizon Forbidden West - PS5', 'Explore terras distantes, enfrente máquinas maiores e mais imponentes, e encontre novas tribos incríveis ao retornar para o futuro distante e pós-apocalíptico de Horizon. A terra está morrendo! Tempestades implacáveis e uma praga incontrolável devastam o que sobrou da humanidade enquanto máquinas assustadoras vagam por territórios próximos. A vida na Terra segue rumo à outra extinção, e ninguém sabe o porquê. Cabe a Aloy descobrir os segredos por trás dessas ameaças e restaurar a ordem e equilíbrio ao mundo. Ao longo do caminho, ela reencontrará velhos amigos, forjará alianças com novas facções e descobrirá o legado do passado antigo enquanto tenta se manter um passo à frente de um novo inimigo. Uma aventura épica de ação/RPG: - Desbrave um vasto mundo aberto: Descubra terras distantes, novos inimigos, culturas interessantes e personagens marcantes. - Um território majestoso: Explore florestas exuberantes, cidades imersas em água e montanhas gigantescas em uma América no futuro distant', 350);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `consoles`
--
ALTER TABLE `consoles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `DescricaoDoProduto` (`modelo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
