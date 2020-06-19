-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 6 月 18 日 19:09
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
-- テーブルの構造 `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `carts`
--

INSERT INTO `carts` (`id`, `item_id`, `count`) VALUES
(1, 1, 500),
(2, 2, 236),
(3, 3, 958),
(4, 4, 514),
(5, 5, 327),
(6, 6, 857);

-- --------------------------------------------------------

--
-- テーブルの構造 `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `items`
--

INSERT INTO `items` (`id`, `name`) VALUES
(1, 'りんご'),
(2, 'みかん'),
(3, 'もも'),
(4, 'パイナップル'),
(5, 'アボガド'),
(100, 'ドリアン');

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

-- --------------------------------------------------------

--
-- テーブルの構造 `my_items`
--

CREATE TABLE `my_items` (
  `id` int(11) NOT NULL,
  `maker_id` int(11) NOT NULL,
  `item_name` text,
  `item_name_kana` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `keyword` text NOT NULL,
  `rank` int(11) NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `my_items`
--

INSERT INTO `my_items` (`id`, `maker_id`, `item_name`, `item_name_kana`, `price`, `keyword`, `rank`, `sales`) VALUES
(1, 1, 'ラパン', 'らぱん', 140000, '青,女性向け,小洒落感', 5, 15),
(2, 2, 'ビート', 'びーと', 380000, '黄,オープンカー,スポーツカー', 8, 10),
(3, 4, 'ミラ・ジーノ', 'みらじーの', 220000, '白,女性向け,小洒落感', 6, 100),
(4, 1, 'ジムニー', 'じむにー', 600000, '緑,SUV,ジムニー', 3, 94),
(5, 3, 'AZ-1', 'えいぜっとわん', 450000, '赤,スポーツカー,ガルウイング', 9, 52),
(6, 4, 'ミゼット2', 'みせっとつー', 250000, '黄,トラック,一人乗り', 2, 69),
(7, 1, 'カプチーノ', 'かぷちーの', 700000, '赤,オープンカー,スポーツカー', 7, 2),
(8, 4, 'ミラ・イース', 'みらいーす', 400000, '白,一般向け,可もなく不可もなく', 1, 200),
(9, 2, 'トゥデイ', 'とぅでい', 30000, '白黒,古い,逮捕しちゃうぞ', 4, 5);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `makers`
--
ALTER TABLE `makers`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `my_items`
--
ALTER TABLE `my_items`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルのAUTO_INCREMENT `makers`
--
ALTER TABLE `makers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- テーブルのAUTO_INCREMENT `my_items`
--
ALTER TABLE `my_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
