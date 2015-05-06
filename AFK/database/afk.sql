/*
 Database - afk
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`afk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `afk`;

/*Table structure for table `securequestions` */

DROP TABLE IF EXISTS `securequestions`;

CREATE TABLE `securequestions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `securequestions` */

/*Table structure for table `term` */

DROP TABLE IF EXISTS `term`;

CREATE TABLE `term` (
  `PAGENAME` varchar(30) CHARACTER SET latin1 NOT NULL,
  `TERMNAME` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `term` */

insert  into `term`(`PAGENAME`,`TERMNAME`) values ('logpage','Email Address'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords');

/*Table structure for table `terms` */

DROP TABLE IF EXISTS `terms`;

CREATE TABLE `terms` (
  `PAGENAME` varchar(30) NOT NULL,
  `TERMNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `terms` */

insert  into `terms`(`PAGENAME`,`TERMNAME`) values ('logpage','Email Address'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `PAGENAME` varchar(30) CHARACTER SET latin1 NOT NULL,
  `TERMNAME` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`PAGENAME`,`TERMNAME`) values ('logpage','Email Address'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords'),('logpage','username'),('logpage','password'),('login','Document Collection'),('login','TREC/NTCIR TOPICS'),('login','A list of Keywords');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `USER_ID` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `LASTLOG` date NOT NULL,
  `ifAnswer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`USER_ID`,`PASSWORD`,`LASTLOG`,`ifAnswer`) values ('user1','1234','2015-3-1',0),('user1','1234','2015-3-1',0),('user1','1234','2015-3-1',0);

/*Table structure for table `userback` */

DROP TABLE IF EXISTS `userback`;

CREATE TABLE `userback` (
  `USER_ID` varchar(30) CHARACTER SET latin1 NOT NULL,
  `PASSWORD` varchar(30) CHARACTER SET latin1 NOT NULL,
  `LASTLOG` date NOT NULL,
  `ifAnswer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `userback` */

insert  into `userback`(`USER_ID`,`PASSWORD`,`LASTLOG`,`ifAnswer`) values ('user1','1234','2015-3-1',0),('user1','1234','2015-3-1',0),('user1','1234','2015-3-1',0);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT 'useraddress',
  `password` varchar(32) NOT NULL COMMENT 'password',
  `securequestion` varchar(50) DEFAULT NULL,
  `secureAnswer` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `regtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`securequestion`,`secureAnswer`,`status`,`regtime`) values (1,'guest@my.unt.edu','defaultpassword','What is your favourite color','Red',1,20141221);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
