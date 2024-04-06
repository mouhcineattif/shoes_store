create database shoes_store;
use shoes_store;
show create table shoes_store.produit;
CREATE TABLE `admin` (
   `id` int NOT NULL AUTO_INCREMENT,
   `username` varchar(45) ,
   `password` varchar(45) ,
   `date_de_creation` date ,
   PRIMARY KEY (`id`)
 );
 CREATE TABLE `categorie` (
   `id` int NOT NULL AUTO_INCREMENT,
   `libelle` varchar(45) ,
   `description` varchar(45) ,
   `date_creation_categorie` date ,
   PRIMARY KEY (`id`)
 ) ;
 
 CREATE TABLE `produit` (
   `id` int NOT NULL AUTO_INCREMENT,
   `libelle` varchar(45) ,
   `prix` decimal(10,0) ,
   `discount` int ,
   `id_categorie` int,
   `date_creation_produit` date ,
   PRIMARY KEY (`id`),
   KEY `id_categorie` (`id_categorie`),
   CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `produit` (`id`)
 );