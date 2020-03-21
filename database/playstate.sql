-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/03/2020 às 23:35
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `playstate`
--
CREATE DATABASE IF NOT EXISTS `playstate` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `playstate`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `console` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `value` decimal(10,0) NOT NULL,
  `genre` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `discount` decimal(1,0) NOT NULL,
  `wallpaper` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `games`
--

INSERT INTO `games` (`id`, `title`, `console`, `description`, `value`, `genre`, `discount`, `wallpaper`) VALUES
(1, 'Grand Theft Auto V', 'PlayStation 4', 'Quando um malandro de rua, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem com alguns dos criminosos mais assustadores e loucos do submundo, o governo dos EUA e a indústria do entretenimento, eles devem realizar golpes ousados para sobreviver nessa cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro.', '50', 'Ação', '0', 'src/public/games/grand theft auto v.jpeg'),
(2, 'Doom Eternal', 'PlayStation 4', 'Os exércitos do Inferno invadiram a Terra. Torne-se o Slayer em uma campanha épica para um jogador e derrote demônios entre dimensões para impedir a derradeira destruição da humanidade.', '199', 'Acão', '0', 'src/public/games/doom eternal.jpeg'),
(3, 'Red Dead Redemption 2', 'PlayStation 4', 'Estados Unidos, 1899.\r\n\r\nArthur Morgan e a gangue Van der Linde são bandidos em fuga. Com agentes federais e os melhores caçadores de recompensas no seu encalço, a gangue precisa roubar, assaltar e lutar para sobreviver no impiedoso coração dos Estados Unidos. Conforme divisões internas profundas ameaçam despedaçar a gangue, Arthur deve fazer uma escolha entre os seus próprios ideais e a lealdade à gangue que o criou.', '150', 'Aventura', '0', 'src/public/games/red dead redemption 2.jpeg'),
(4, 'MONSTER HUNTER: WORLD', 'PlayStation 4', 'Conheçam o Novo Mundo! Assuma o papel de caçador e mate monstros ferozes em um ecossistema realista e natural, onde você pode usar a paisagem e os diversos habitantes a seu favor. Cace sozinho ou em cooperação com até três outros jogadores e use os materiais coletados de adversários derrotados para montar novos equipamentos e encarar feras maiores e mais difíceis!', '120', 'Aventura', '0', 'src/public/games/monster hunter world.jpeg'),
(5, 'Assassin\'s Creed Origins', 'PlayStation 4', 'O Antigo Egito, uma terra de grandeza e intriga, está desaparecendo sob um conflito implacável por poder. Desvende segredos sombrios e mitos esquecidos ao retornar a um momento fundamental: a origem da Irmandade dos Assassinos.', '150', 'Aventura', '0', 'src/public/games/assassin s creed origins.jpeg'),
(6, 'Divinity: Original Sin 2 - Definitive Edition', 'PlayStation 4', 'O Divino está morto. O Vazio se aproxima. E os poderes que estão adormecidos dentro de você logo serão despertados. A batalha pela divindade começou. Escolha sabiamente e confie com moderação; trevas espreita dentro de cada coração.', '80', 'RPG', '0', 'src/public/games/divinity original sin 2 definitive edition.jpeg'),
(7, 'Don\'t Starve Together', 'PlayStation 4', 'Entre num mundo estranho e inexplorado, repleto de criaturas estranhas, perigos e surpresas. Junte recursos para criar itens e estruturas que combinam com seu estilo de sobrevivÍncia.', '20', 'Sobrevivência', '0', 'src/public/games/don t starve together.jpeg'),
(8, 'The Witcher 3: Wild Hunt', 'PlayStation 4', 'The Witcher: Wild Hunt é um RPG de mundo aberto de fantasia cheio de escolhas vitais. Em The Witcher, você joga como um caçador de monstros profissional, Geralt de Rívia, em busca da criança da profecia em um vasto mundo aberto, rico em cidades mercantis, ilhas piratas, passagens perigosas nas montanhas e cavernas esquecidas a serem exploradas.', '100', 'RPG', '0', 'src/public/games/the witcher 3 wild hunt.jpeg'),
(9, 'DRAGON BALL Z: KAKAROT', 'PlayStation 4', 'Vivencie a história de DRAGON BALL Z desde eventos épicos a missões secundárias bem divertidas, incluindo momentos inéditos que explicam alguns fatos da história de DRAGON BALL revelados pela primeira vez!', '180', 'Luta', '0', 'src/public/games/dragon ball z kakarot.jpeg'),
(10, 'Borderlands 3', 'PlayStation 4', 'O jogo de tiro original está de volta, com milhões de armas e uma aventura cheia de destruição! Acabe com novos mundos e inimigos com um dos quatro novos Vault Hunters. Jogue sozinho ou com amigos para enfrentar inimigos insanos, conseguir um monte de itens e salvar seu lar dos líderes cultistas mais cruéis da galáxia.', '150', 'Ação', '0', 'src/public/games/borderlands 3.jpeg'),
(11, 'Forza Horizon 4', 'Xbox One', 'em Forza Horizon 4 participamos mais uma vez do festival que dá nome ao game, podendo explorar um mapa gigantesco em busca de provas e de desafios para ser o grande nome do evento. A grande novidade é que este cenário muda conforme passam as quatro estações do ano, o que vai muito além de algo cosmético. Se é bonito ver a neve caindo e acumulando em uma pastagem, lembre-se que as pistas, tanto de asfalto quanto de terra, ficam mais escorregadias -- mas lagos congelados abrem passagens, atalhos e, assim, favorecem o aparecimento de novas corridas. Na primavera, a quantidade de chuva cria poças em todos os lugares e passar por uma delas pode significar a perda de controle do carro. No verão, tudo fica mais seco e lembra um pouco o \"padrão\" dos games de corrida, embora caia uma chuvinha esporadicamente. No outono, as folhas das árvores e umidade permanente são o foco da estação.', '100', 'Corrida', '0', 'src/public/games/forza horizon 4.jpeg'),
(12, 'KINGDOM HEARTS III', 'Xbox One', 'KINGDOM HEARTS III conta a história do poder da amizade e da luz contra as trevas enquanto Sora e seus amigos embarcam em uma perigosa aventura. Passando-se em uma grande variedade de mundos da Disney e da Pixar, KINGDOM HEARTS segue a jornada de Sora, um herdeiro de um poder espetacular, mas que nem sabia disso.', '100', 'Aventura', '0', 'src/public/games/kingdom hearts iii.png'),
(13, 'Watch Dogs', 'Xbox One', 'Jogue como Marcus Holloway, um jovem e brilhante hacker que vive no berço da revolução tecnológica, a Bay Area de San Francisco. Junte-se à DedSec, um notório grupo de hackers, para revelar os perigos escondidos do ctOS 2.0 que corporações corruptas usam de forma errada para monitorar e manipular cidadãos em grande escala.', '120', 'Tiro', '0', 'src/public/games/watch dogs.jpeg'),
(14, 'Naruto Shippuden: Ultimate Ninja Storm 4', 'Xbox One', 'O mais recente capítulo da aclamada série STORM leva-te numa viagem arrebatadora e colorida. Utiliza o sistema de combate renovado e prepara-te para participar nos combates mais épicos que alguma vez viste na série NARUTO SHIPPUDEN: Ultimate Ninja STORM!\r\n\r\nPrepara-te para o jogo STORM mais antecipado de sempre!', '125', 'Luta', '0', 'src/public/games/naruto shippuden ultimate ninja storm 4.jpeg'),
(15, 'Gears 5', 'Xbox One', 'Gears, uma das sagas mais aclamadas dos games, está maior do que nunca, com cinco modos eletrizantes e a campanha mais intensa de todas.', '170', 'Tiro', '0', 'src/public/games/gears 5.jpeg'),
(16, 'Halo: The Master Chief Collection', 'Xbox One', 'Master Chief Collection dá aos jogadores a oportunidade de viver sua própria e empolgante jornada pela saga Halo. Começando com a incrível bravura dos Noble Seis em Halo: Reach, e, encerrando com a ascensão de um novo inimigo em Halo 4, os jogos serão lançados na ordem cronológica da história. Quando completa, a saga do Master Chief terá um total de 68 missões de campanha ao longo dos seis jogos.', '90', 'Tiro', '0', 'src/public/games/halo the master chief collection.jpeg'),
(17, 'The Outer Worlds', 'Xbox One', 'The Outer Worlds é um novo RPG de ficção científica para um jogador da Obsidian Entertainment e Private Division. Explorando uma colônia espacial, o personagem que você decidir se tornar determinará o curso da história. Na equação corporativa da colônia, você é uma variável inesperada.', '199', 'RPG', '0', 'src/public/games/the outer worlds.jpeg'),
(18, 'The Elder Scrolls V: Skyrim Special Edition', 'Xbox One', 'Skyrim não é uma sequência direta de Oblivion; ao invés disso, é um novo capítulo na série The Elder Scrolls, se passando duzentos anos depois dos eventos de Oblivion. Na premissa de Skyrim, o Império começa a ceder territórios para as nações Élficas uma vez governadas, porque não há nenhum herdeiro para o trono do Imperador. Os Blades não tem ninguém para defender, e gradualmente morreram, foram assassinados ou se isolaram do resto do mundo. Depois do assassinato do Rei de Skyrim, uma guerra civil irrompe entre as raças nativas Nord — sendo a maioria aqueles que desejavam que Skyrim se separe do Império, e o resto sendo aqueles que desejam que Skyrim permaneça no Império.', '200', 'RPG', '0', 'src/public/games/the elder scrolls v skyrim special edition.jpeg'),
(19, 'Assassin\'s Creed Syndicate', 'Xbox One', 'Londres, 1868. No auge da Revolução Industrial, lidera a tua organização criminosa e aumenta a tua influência para combateres contra os que exploram os menos privilegiados em nome do progresso.', '70', 'Aventura', '0', 'src/public/games/assassin s creed syndicate.jpeg'),
(20, 'Resident Evil: 2', 'Xbox One', 'Obra prima que definiu o gênero, Resident Evil 2 retorna, completamente refeito com uma experiência narrativa mais profunda. Usando o RE Engine de propriedade da Capcom, Resident Evil 2 oferece uma nova visão na clássica saga de horror de sobrevivência com visuais realistas de tirar o fôlego, áudio imersivo de acelerar o coração, uma nova câmera sobre o ombro e controles modernos além de modos de jogabilidade do jogo original.', '128', 'Terror', '0', 'src/public/games/resident evil 2.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
