<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 01</title>
        <style>
            *{
                box-sizing: border-box;
                margin: 0;
            }
            
            header{
                width: 100%;
                height: 13vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background: lightblue;
            }
            
            main{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 74vh;
            }
            
            footer{
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                height: 13vh;
                gap: 30px;
                background: lightblue;
            }
            
            footer img{
                width: 40px;
                height: auto;
            }
        </style>
            
    </head>
    <body>
        <header class="header">
            <h1><a href="../indexProyectoTema5.php">Alejandro De la Huerga</a></h1>
            <h1>Ejercicio 01</h1>
        </header>
        <main>
            <section>
                <?php
                /**
                 * @author: Alejandro De la Huerga
                 * @since 18/11/2025
                 * 
                 * Ejercicio 1: Desarrollo de un control de acceso con identificación del usuario basado en la función header().
                 */
                //https://www.php.net/manual/es/function.header.php
                
                /**
                 * @var array<string, string> $aUsuarios Array asociativo con los usuarios válidos, sus contraseñas nombres completos.
                 * La clave es el nombre de usuario y el valor es la contraseña y el nombre.
                 */
                
                $aUsuarios = [
                    "admin" => [hash('sha256', 'paso'), "admin"],
                    "alejandro" => [hash('sha256', 'paso'), "Alejandro De La Huerga"],
                    "heraclio" => [hash('sha256', 'paso'), "Héraclio Borbujo"]
                ];
                $usuario=$_SERVER['PHP_AUTH_USER'];
                $passwd = $_SERVER['PHP_AUTH_PW'];
                //si no se han enviado las credenciales hay que pedir autenticación
                if (!isset($usuario,$passwd )) {
                    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                    header('HTTP/1.0 401 Unauthorized');
                    echo "Usuario no reconocido!";
                    //es obligatorio exit
                    exit;
                }
                //se comprueban las credenciales
                if (!array_key_exists($usuario, $aUsuarios) || $aUsuarios[$usuario][0] !== hash('sha256', $passwd)) {
                    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                    header('HTTP/1.0 401 Unauthorized');
                    echo "Credenciales incorrectas!";
                    //es obligatorio exit
                    exit;
                }
                ?>
            </section>
            <h2>Bienvenido/a, <?php echo $aUsuarios[$usuario][1] ?> </h2>
            <h2>Has iniciado sesión correctamente.</h2>
        </main>
        <footer>
            <a href="../indexProyectoTema3.php">Alejandro De la Huerga Fernández</a>
            <a href="https://github.com/alejandrohuerga/AHFDWESProyectoTema3.git">
                <img src="../doc/images/github-logo.png"> 
            </a>
        </footer>
    </body>
</html>
