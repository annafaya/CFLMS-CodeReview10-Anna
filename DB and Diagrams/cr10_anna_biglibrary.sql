-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 08:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_anna_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_anna_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_anna_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `ISBN` varchar(30) DEFAULT NULL,
  `short_description` varchar(300) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `publisher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `type`, `title`, `author`, `ISBN`, `short_description`, `publish_date`, `publisher`) VALUES
(1, 'https://media1.jpc.de/image/w600/front/0/9781408855652.jpg', 'Book', 'Harry Potter and the Philosophers stone', 'JK Rowling', '98452', 'Young Harry Potter finds out he is a wizard...', '1997-06-25', 'Bloomsbury Publishing'),
(2, 'https://images-na.ssl-images-amazon.com/images/I/51tW-UJVfHL._SX321_BO1,204,203,200_.jpg', 'DVD', 'The Fellowship of the Ring', 'JRR Tolkien', '16921', 'The fellowship must reach mount doom to destroy the one Ring...', '2002-07-29', 'George Allen & Unwin'),
(3, 'https://www.carlsen.de/sites/default/files/styles/product_medium/public/produkt/cover/9783551728661.jpg?itok=oSLsPLto', 'Book', 'One Piece', 'Eiichiro Oda', '9292', 'In the age of the pirates everyone chases the same treasure...', '1997-09-02', 'Shueisha'),
(4, 'https://upload.wikimedia.org/wikipedia/en/thumb/4/4a/TheHobbit_FirstEdition.jpg/220px-TheHobbit_FirstEdition.jpg', 'Book', 'The Hobbit', 'JRR Tolkien', '96601', 'The life of Hobbit Bilbo changes as one day a Wizard and a bunch of Dwarfs appear in front of his house...', '1937-09-21', 'George Alln & Unwin'),
(5, 'https://upload.wikimedia.org/wikipedia/en/c/c4/TheAlchemist.jpg', 'Book', 'The Alchemist', 'Paulo Coelho', '00625141', 'A Quest to find the treasure hidden in the pyramids of Egypt', '1988-01-01', 'Harpertorch'),
(6, 'https://upload.wikimedia.org/wikipedia/en/2/26/And_Then_There_Were_None_US_First_Edition_Cover_1940.jpg', 'Book', 'And then there were none', 'Agatha Christie', '936492', 'On 8 August in the late 1930s, eight people arrive on a small, isolated island...', '1939-11-06', 'Collins Crime Club'),
(7, 'https://images-na.ssl-images-amazon.com/images/I/51VjV1cS1oL._SX311_BO1,204,203,200_.jpg', 'Book', 'The Master and Margarita', 'Mikhail Bulgakov', '640217309', 'The story concerns a visit by the devil to the officially atheistic Soviet Union.', '1966-01-01', 'YMCA Press'),
(8, 'https://images-na.ssl-images-amazon.com/images/I/81UjsCGC6rL.jpg', 'Book', 'Dream of the Red Chamber', 'Cao Xueqin', '018729498', 'A semi-autobiography about the Authors own family..', '1791-02-02', 'ChinesePublic'),
(9, 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/DaVinciCode.jpg/220px-DaVinciCode.jpg', 'Book', 'The Da Vinci Code', 'Dan Brown', '0451822', 'There is a murder in the Louvre Museum in Paris...', '2003-04-23', 'Doubleday'),
(10, 'https://upload.wikimedia.org/wikipedia/en/thumb/d/dc/The_Hunger_Games.jpg/220px-The_Hunger_Games.jpg', 'Book', 'The Hunger Games', 'Suzanne Collins', '9870438', 'The Hunger Games is an annual event in which one boy and one girl aged 12–18 from each of the twelve districts surrounding the Capitol are selected by lottery to compete in a televised battle royale to the death...', '2008-09-14', 'Schcolastic Press'),
(11, 'https://m.media-amazon.com/images/I/618skfhn6RL.jpg', 'Book', 'Guards!Guards!', 'Terry Pratchett', '2002508911', 'A book about dragons, guards and the weird city of Ank-morphok.', '2007-07-12', 'Random House AudioBooks'),
(12, 'https://images-na.ssl-images-amazon.com/images/I/517UdroKvTL._SX319_BO1,204,203,200_.jpg', 'Book', 'The Colour of Magic', 'Terry Pratchett', '552166596', 'The first book of the serie of \"Discworld\" novels.', '2012-07-21', 'Corgi'),
(13, 'https://images-na.ssl-images-amazon.com/images/I/61iU2uVLARL._SX331_BO1,204,203,200_.jpg', 'CD', 'The Labyrinth of Dreaming Books', 'Walter Moers', '1468307142', 'The explosive continuation of the \"City of Dreaming Books\"! ', '2013-10-23', 'Harry N. Abrams'),
(14, 'https://images-na.ssl-images-amazon.com/images/I/51p-sE4me1L._SX322_BO1,204,203,200_.jpg', 'CD', 'The Screaming Staircase', 'Jonathan Stroud', '552566780', 'First book of the thrilling saga of \"Lockwood & Co\"', '2014-07-03', 'Corgi Childrens'),
(15, 'https://images-eu.ssl-images-amazon.com/images/I/51jlC3YTgxL.jpg', 'DVD', 'Doctor Who: Royal Blood', 'Una McCormack ', '18499099210', '“The Grail is a story, a myth! It didn’t exist on your world! It can’t exist here!”', '2015-09-10', 'BBC Digital'),
(16, 'https://images-na.ssl-images-amazon.com/images/I/51NTCqae4AL._SX317_BO1,204,203,200_.jpg', 'Book', 'Moonwise', 'Greer Ilene Gilman', '451450949', 'Sylvie and Ariane, two recently reunited friends, become inextricably caught up in the fantasy world they created years before..', '1991-02-01', 'Penguin Books Ltd'),
(17, 'https://images-na.ssl-images-amazon.com/images/I/61tm80uUR-L._SX324_BO1,204,203,200_.jpg', 'Book', 'The Ocean at the End of the Lane', 'Neil Gaiman', '1472200349', 'It began for our narrator forty years ago when the family lodger stole their car and committed suicide in it, stirring up ancient powers best left undisturbed..', '2014-04-10', 'Headline'),
(18, 'https://images-na.ssl-images-amazon.com/images/I/51JFsiR%2Bo6L._SX310_BO1,204,203,200_.jpg', 'Book', 'The Left Hand of Darkness', 'Ursula K. Le Guin', '143111590', 'A lone human emissary. An alien world whose inhabitants can change their gender..', '2015-10-25', 'Penguin Random House USA'),
(19, 'https://images-na.ssl-images-amazon.com/images/I/51tLvYdbRcL._SX331_BO1,204,203,200_.jpg', 'Book', 'The Tombs of Atuan', 'Ursula K. Le Guin', '1442459913', 'In this second novel in the Earthsea series, Tenar is chosen as high priestess to the ancient and nameless Powers of the Earth', '2012-09-11', 'Atheneum Books for Young Reade'),
(20, 'https://images-eu.ssl-images-amazon.com/images/I/51OZerWcGCL.jpg', 'DVD', 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', '80199101170', 'There is a plot, Harry Potter. A plot to make most terrible things happen at Hogwarts School of Witchcraft and Wizardry this year.', '2015-12-08', 'Pottermore Publishing'),
(22, 'https://sppa.org.br/uploads/literature/10.jpg', 'Book', 'Dom Casmurro', 'Machado de Assis', '9788567', 'Capitu não traiu Bentinho que era apenas mais um homem inseguro...', '1899-04-03', 'Livraria Garnier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
