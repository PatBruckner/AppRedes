CREATE TABLE `messages` (
  `id_message` int(20) PRIMARY KEY AUTO_INCREMENT,
  `id_user` varchar(20) NOT NULL,
  `text_message` text DEFAULT NULL
);