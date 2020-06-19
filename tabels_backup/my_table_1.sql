-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 6 月 18 日 19:02
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `my_db`
--

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
-- テーブルのインデックス `my_items`
--
ALTER TABLE `my_items`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `my_items`
--
ALTER TABLE `my_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
