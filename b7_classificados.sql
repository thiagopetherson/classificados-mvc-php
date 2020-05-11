/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.7.24 : Database - b7_classificados
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`b7_classificados` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `b7_classificados`;

/*Table structure for table `anuncios` */

DROP TABLE IF EXISTS `anuncios`;

CREATE TABLE `anuncios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `descricao` text,
  `valor` float DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `anuncios` */

insert  into `anuncios`(`id`,`id_usuario`,`id_categoria`,`titulo`,`descricao`,`valor`,`estado`) values 
(3,1,1,'Hublot Editado','Algum produto de anÃºncio legal',300,1),
(5,1,4,'Ferrari','Carro esportivo muito barato',50,1),
(7,1,4,'Citroen C3 2008','Carro em bom estado',15000,1),
(8,1,2,'Camisa Oakey','Camisa boa',50,1),
(9,1,4,'Sandero ','Sandero novinho ano 2010',20000,2),
(11,2,3,'Playstation 4','Usado, porÃ©m em bom estado',1200,2);

/*Table structure for table `anuncios_imagens` */

DROP TABLE IF EXISTS `anuncios_imagens`;

CREATE TABLE `anuncios_imagens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `anuncios_imagens` */

insert  into `anuncios_imagens`(`id`,`id_anuncio`,`url`) values 
(5,3,'ce22b99a632571fc5ff345eafa252a67.jpg'),
(6,3,'c38581766dff46f000ae243330ead1a8.jpg'),
(9,5,'04bd9d8ac92c267405cfa7682d59049b.jpg'),
(10,5,'fb3019cbc47211aed1cb32b76d660c13.jpg'),
(12,7,'60c92ff107da343e36605a9bfb790bc9.jpg'),
(13,8,'464000d08f5e8e1d7bb5c375638a9e93.jpg'),
(14,9,'dde6a354541928810d9329ca556c30e9.jpg');

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `categorias` */

insert  into `categorias`(`id`,`nome`) values 
(1,'Relógios'),
(2,'Roupas'),
(3,'Eletrônicos'),
(4,'Carros');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`nome`,`email`,`senha`,`telefone`) values 
(1,'Thiago','thipetherson@gmail.com','505987','21972750641'),
(2,'Daniel','daniel@b7web.com.br','34126361','44444444444'),
(3,'Andrews','andrews.ribeiro.gomes@gmail.com','dfhfghfghfghfg','5246565656'),
(4,'Caio','caio@gmail.com','5646545465','654654654646'),
(5,'Alok','alok@gmail.com','asffsdfdf','4554444446'),
(6,'Luan','luan-4561@hotmail.com','34126361','sdsdsdsdsdfsdf25'),
(7,'1','Rollex ','2000','RelÃ³gio Rolex usado que jÃ¡ foi do Tigger Woods');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
