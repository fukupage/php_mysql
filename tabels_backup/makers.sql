-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 6 月 18 日 19:05
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `my_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `makers`
--

CREATE TABLE `makers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `makers`
--

INSERT INTO `makers` (`id`, `name`, `address`, `tel`) VALUES
(1, 'スズキ', '静岡県 浜松市', '058-264-8131'),
(2, 'ホンダ', '東京都港区南青山', '03-3423-1111'),
(3, 'マツダ', '広島県安芸郡府中町', '082-282-1111'),
(4, 'ダイハツ', '大阪府池田市', '072-751-8811');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `makers`
--
ALTER TABLE `makers`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `makers`
--
ALTER TABLE `makers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `makers`
--
ALTER TABLE `makers`
  ADD CONSTRAINT `makers_ibfk_1` FOREIGN KEY (`id`) REFERENCES `my_items` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
