SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `randomness` (
  `id` int(11) NOT NULL,
  `rand_int` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

INSERT INTO `randomness` (`id`, `rand_int`) VALUES
(1, 898),
(2, 16),
(3, 3),
(4, 3),
(5, 12),
(6, 27),
(7, 8),
(8, 187),
(9, 61),
(10, 39),
(11, 38),
(12, 98),
(13, 215),
(14, 321),
(15, 25);


ALTER TABLE `randomness`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `randomness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;