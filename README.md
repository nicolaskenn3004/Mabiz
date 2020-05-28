# Mabiz
CREATE DATABASE login;

use login

CREATE TABLE `login`.`usuario` ( `usuario_id` INT NOT NULL AUTO_INCREMENT , `usuario` VARCHAR(200) NOT NULL , `senha` VARCHAR(32) NOT NULL , PRIMARY KEY (`usuario_id`)) ENGINE = InnoDB; 

select * from usuario

INSERT INTO usuario(usuario,senha)VALUES("mabiz",md5("marmilady"));
