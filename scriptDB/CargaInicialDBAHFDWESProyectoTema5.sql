/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  alejandro.huefer
 * Created: 17 nov. 2025
 */

/* Carga de datos en las tablas */

USE DBAHFDWESProyectoTema5;

INSERT INTO T_01Usuario (T01_CodUsuario,T01_Password,T01_DescUsuario,T01_ImagenUsuario) VALUES
    ('AHF',SHA2('pasoAlejandro',256),'Alejandro De la Huerga Fernández',null),
    ('VG',SHA2('pasoVero',256),'Véro Grué',null),
    ('HER',SHA2('pasoHeraclio',256),'Heraclio Borbujo',null);

INSERT INTO T_02Departamento (T02_CodDepartamento,T02_DescDepartamento,T02_FechaCreacionDepartamento,T02_VolumenDeNegocio,T02_FechaBajaDepartamento) VALUES 
    ('AUT','Automoción',now(),1285.50,NULL),
    ('AER','Aeronautica',now(),2285.50,NULL),
    ('DEF','Defensa',now(),3285.50,'2025-05-25');
