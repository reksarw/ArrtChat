DROP TABLE admin;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE chatroom;

CREATE TABLE `chatroom` (
  `room_id` int(9) NOT NULL AUTO_INCREMENT,
  `user_create` varchar(50) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_type` enum('Private','Public') NOT NULL,
  `room_password` varchar(50) NOT NULL,
  `room_image` varchar(100) NOT NULL,
  `room_date` datetime NOT NULL,
  `room_active` enum('Y','N') NOT NULL,
  `room_popular` enum('Y','N') NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO chatroom VALUES("2","reksarw","18 Plus Plus","Public","-","joki.jpg","2016-03-31 05:22:11","Y","Y");
INSERT INTO chatroom VALUES("6","12","12","Public","","","2016-03-04 01:10:40","Y","Y");



DROP TABLE message;

CREATE TABLE `message` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("62","reksarangga","haiii ","18 Plus Plus","2016-03-02 08:28:51");
INSERT INTO message VALUES("63","maulanaalfan","<text style=\'text-decoration:line-through\'>pucung jancok</text>","RPL B","2016-03-02 08:34:45");
INSERT INTO message VALUES("64","maulanaalfan","<text style=\'text-decoration:line-through\'>pucung jancok</text>","RPL B","2016-03-02 08:34:47");
INSERT INTO message VALUES("65","reksarw","[senyum]","RPL B","2016-03-02 08:34:49");
INSERT INTO message VALUES("66","reksarw","[marah]","RPL B","2016-03-02 08:34:55");
INSERT INTO message VALUES("67","maulanaalfan","<text style=\'text-decoration:line-through\'>jancok </text>","RPL B","2016-03-02 08:35:09");
INSERT INTO message VALUES("68","maulanaalfan","<text style=\'text-decoration:line-through\'>jancok </text>","RPL B","2016-03-02 08:35:11");
INSERT INTO message VALUES("69","cupung","taek aaa","RPL B","2016-03-02 08:35:11");
INSERT INTO message VALUES("70","maulanaalfan","taek","RPL B","2016-03-02 08:35:16");
INSERT INTO message VALUES("71","maulanaalfan","taek","RPL B","2016-03-02 08:35:18");
INSERT INTO message VALUES("72","maulanaalfan","taek","RPL B","2016-03-02 08:35:20");
INSERT INTO message VALUES("73","cupung","ulululululuul","RPL B","2016-03-02 08:35:25");
INSERT INTO message VALUES("74","maulanaalfan","<text style=\'text-decoration:line-through\'>bangsat</text>","RPL B","2016-03-02 08:35:36");
INSERT INTO message VALUES("75","cupung","ayo fap fap","RPL B","2016-03-02 08:35:45");
INSERT INTO message VALUES("76","maulanaalfan","[senyum]","RPL B","2016-03-02 08:36:01");
INSERT INTO message VALUES("77","cupung","[marah]","RPL B","2016-03-02 08:36:06");
INSERT INTO message VALUES("78","maulanaalfan","pucung kakean nang dolly","RPL B","2016-03-02 08:36:12");
INSERT INTO message VALUES("79","cupung","[blush]","RPL B","2016-03-02 08:36:17");
INSERT INTO message VALUES("80","reksarw","wkwkwkw","RPL B","2016-03-02 08:37:10");
INSERT INTO message VALUES("81","maulanaalfan","gendeng","RPL B","2016-03-02 08:37:12");
INSERT INTO message VALUES("82","cupung","fap fap","RPL B","2016-03-02 08:37:24");
INSERT INTO message VALUES("83","maulanaalfan","hai\'","RPL B","2016-03-02 08:37:30");
INSERT INTO message VALUES("84","cupung","opoooo","RPL B","2016-03-02 08:38:10");
INSERT INTO message VALUES("85","maulanaalfan","session_destroy();","RPL B","2016-03-02 08:38:31");
INSERT INTO message VALUES("86","maulanaalfan","yghbjnj","RPL B","2016-03-02 08:38:44");
INSERT INTO message VALUES("87","cupung","opo yoooo","RPL B","2016-03-02 08:38:49");
INSERT INTO message VALUES("88","maulanaalfan","cjvjjhfgggh","RPL B","2016-03-02 08:38:52");
INSERT INTO message VALUES("89","cupung","","RPL B","2016-03-02 08:39:32");
INSERT INTO message VALUES("90","cupung","etee","RPL B","2016-03-02 08:39:36");
INSERT INTO message VALUES("91","cupung","etee","RPL B","2016-03-02 08:39:38");
INSERT INTO message VALUES("92","maulanaalfan","session_destroy();","RPL B","2016-03-02 08:39:40");
INSERT INTO message VALUES("93","cupung","yeyeye","RPL B","2016-03-02 08:39:48");
INSERT INTO message VALUES("94","maulanaalfan","<?php session_destroy(); ?>","RPL B","2016-03-02 08:40:17");
INSERT INTO message VALUES("95","cupung","<?php session_destroy() ?>","RPL B","2016-03-02 08:40:24");
INSERT INTO message VALUES("96","cupung","opo leeee","RPL B","2016-03-02 08:40:48");
INSERT INTO message VALUES("97","maulanaalfan","الله","RPL B","2016-03-02 08:40:52");
INSERT INTO message VALUES("98","maulanaalfan","hai bebek","RPL B","2016-03-02 08:41:16");
INSERT INTO message VALUES("99","maulanaalfan","hai bebek","RPL B","2016-03-02 08:41:18");
INSERT INTO message VALUES("100","cupung","cek","RPL B","2016-03-02 08:42:14");
INSERT INTO message VALUES("101","maulanaalfan","hi","18 Plus Plus","2016-03-02 08:43:20");



DROP TABLE online;

CREATE TABLE `online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

INSERT INTO online VALUES("40","l55kho93vld8l2mbl1idp6qrd6","maulanaalfan","18 Plus Plus");



DROP TABLE user;

CREATE TABLE `user` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `terdaftar` datetime NOT NULL,
  `online` enum('Y','N') NOT NULL,
  `terakhir_login` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("45","Maulana Alfan","2016-03-02 08:34:25","maulanaalfany@gmail.com","f8ca21d89023968357ea7000e54c8a95aae21c96","L","file/2ee279e57641d20988a85c6ab3745d3712239902_686596924816533_9101736720721230499_n.jpg","2016-03-02 08:34:25","N","2016-03-02 08:34:25");
INSERT INTO user VALUES("51","TaNa-San","nanang","ent2019ai@yahoo.com","c88e257f24fb8853113a2bdbaf86f1836a667953","L","file/1d190cf148b9bfdbd33931f06698dcf25f6639b89dbe846e38d90e988ea590f7.jpg","0000-00-00 00:00:00","N","0000-00-00 00:00:00");



