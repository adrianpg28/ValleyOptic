create database SistemaInventarioAdministracion;

USE SistemaInventarioAdministracion;

DROP TABLE IF EXISTS pacientes;

CREATE TABLE pacientes (

  id_atencion INT AUTO_INCREMENT,
  nombre VARCHAR(45) NOT NULL,
  rutp VARCHAR(12) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  comuna VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  telefono VARCHAR(15) NOT NULL,
  
  fecha_aten TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  
  lejosojoderechoESF VARCHAR(7) NULL,
  lejosojoderechoCYL VARCHAR(7) NULL,
  lejosojoderechoEJE VARCHAR(7) NULL,
  
  lejosojoizquierdoESF VARCHAR(7) NULL,
  lejosojoizquierdoCYL VARCHAR(7) NULL,
  lejosojoizquierdoEJE VARCHAR(7) NULL,
  lejosDP VARCHAR(7) NULL,
  
  lejoscristales VARCHAR(20) NULL,
  lejosarmazon VARCHAR(20) NULL,
  
  cercaojoderechoESF VARCHAR(7) NULL,
  cercaojoderechoCYL VARCHAR(7) NULL,
  cercaojoderechoEJE VARCHAR(7) NULL,
  
  cercaojoizquierdoESF VARCHAR(7) NULL,
  cercaojoizquierdoCYL VARCHAR(7) NULL,
  cercaojoizquierdoEJE VARCHAR(7) NULL,
  cercaDP VARCHAR(7) NULL,
  
  cercacristales VARCHAR(20) NULL,
  cercaarmazon VARCHAR(20) NULL,
  estado VARCHAR(20) NOT NULL,
  total INT NOT NULL,
  
  
  PRIMARY KEY (id_atencion));
  
  SELECT * FROM Pacientes;

DROP TABLE IF EXISTS marcos;

CREATE TABLE marcos (

  id_marcos INT AUTO_INCREMENT,
  numeroserie VARCHAR(45) NOT NULL,
  nombremarco VARCHAR(12) NOT NULL,
  color VARCHAR(100) NOT NULL,
  tipo VARCHAR(50) NOT NULL,
  precio INT NOT NULL,
  cantidad INT NOT NULL,
  fecha_ingresomarco TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id_marcos, numeroserie));
  
DROP TABLE IF EXISTS cristales;

CREATE TABLE cristales (

  id_cristal INT AUTO_INCREMENT,
  numserie VARCHAR(45) NOT NULL,
  tipoc VARCHAR(50) NOT NULL,
  precioc INT NOT NULL,

  PRIMARY KEY (id_cristal));
  
  CREATE TABLE rendicion (

  id_rendicion INT AUTO_INCREMENT,
  entregaefectivo INT NOT NULL,
  entregatransbank INT NOT NULL,
  entregatransferencia INT NOT NULL,
  ventasefectivo INT NOT NULL,
  ventastransbank INT NOT NULL,
  ventastransferencia INT NOT NULL,
  gastospersonal INT NOT NULL,
  gastosmateriales INT NOT NULL,
 

  PRIMARY KEY (id_rendicion));
  
  
  
  
  SELECT * FROM pacientes;
  SELECT * FROM cristales;
  SELECT * FROM marcos;
  SELECT * FROM rendicion;
  
  DROP TABLE cristales;
  
  INSERT INTO `sistemainventarioadministracion`.`cristales` (`numserie`, `tipoc`, `precioc`) VALUES ('0', 'NINGUNO', '0');
INSERT INTO `sistemainventarioadministracion`.`cristales` (`numserie`, `tipoc`, `precioc`) VALUES ('1', 'ANTI REFLEJO', '0');
INSERT INTO `sistemainventarioadministracion`.`cristales` (`numserie`, `tipoc`, `precioc`) VALUES ('2', 'FILTRO LUZ AZUL', '5000');
INSERT INTO `sistemainventarioadministracion`.`cristales` (`numserie`, `tipoc`, `precioc`) VALUES ('3', 'FOTOCROMATICO - GRIS', '15000');
INSERT INTO `sistemainventarioadministracion`.`cristales` (`numserie`, `tipoc`, `precioc`) VALUES ('4', 'FOTOCROMATICO - CAFE', '16000');

INSERT INTO `sistemainventarioadministracion`.`marcos` (`numeroserie`, `nombremarco`, `color`, `tipo`, `precio`, `cantidad`) VALUES ('1', 'NINGUNO', '-', '-', '0', '0');
INSERT INTO `sistemainventarioadministracion`.`marcos` (`numeroserie`, `nombremarco`, `color`, `tipo`, `precio`, `cantidad`) VALUES ('5', 'LENTE 5', 'ROJO', 'SOL', '1000', '3');
INSERT INTO `sistemainventarioadministracion`.`marcos` (`numeroserie`, `nombremarco`, `color`, `tipo`, `precio`, `cantidad`) VALUES ('3', 'LENTE 2', 'AMARILLO', 'OPTICO', '2000', '5');
INSERT INTO `sistemainventarioadministracion`.`marcos` (`numeroserie`, `nombremarco`, `color`, `tipo`, `precio`, `cantidad`) VALUES ('4', 'LENTE 3', 'VERDE', 'SOL', '3000', '4');
INSERT INTO `sistemainventarioadministracion`.`marcos` (`numeroserie`, `nombremarco`, `color`, `tipo`, `precio`, `cantidad`) VALUES ('5', 'LENTE 4', 'NEGRO', 'OPTICO', '4000', '3');

