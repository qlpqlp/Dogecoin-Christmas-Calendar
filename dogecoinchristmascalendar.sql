CREATE TABLE `chirstmas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `unic` varchar(255) DEFAULT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `twitter_id` varchar(255) DEFAULT '0',
  `twitter_user` varchar(255) DEFAULT NULL,
  `transaction_id` text,
  `twitter_user_id` varchar(255) DEFAULT NULL,
  `validated` int(1) DEFAULT '0',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;