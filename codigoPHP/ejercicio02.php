<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 02</title>
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
            
            table{
                border: 1px solid black;
                
            }
            
            tr{
                border: 1px solid black;
                
            }
            
            th{
                background: lightblue;
                padding: 4px;
            }
            
            td{
                border: 1px solid black;
                padding: 4px;
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
                 * Ejercicio 2: Desarrollo de un control de acceso con identificación del usuario basado 
                 * en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).
                 */
                //si no se han enviado las credenciales hay que pedir autenticación
                
                $usuarioPasswd=$_SERVER['PHP_AUTH_PW'];
               
               if(!isset($_SERVER['PHP_AUTH_USER'])) {
                    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                    header('HTTP/1.0 401 Unauthorized');
                    echo "Usuario no reconocido!";
                    exit; //el programa acaba aqui
                }
                 // Atributos para el establecimiento de conexión con la base de datos.
                // Utilizamos la variable super global $_SERVER para obtener la ip.

                $dsn = 'mysql:host=' . $_SERVER['SERVER_ADDR'] . ';dbname=DBAHFDWESProyectoTema5';  // Nombre de la base de datos
                $username = 'userAHFDWESProyectoTema5'; // Nombre de usuario de la base de datos
                $password = 'paso'; // password de la base de datos.
                
                try {
                    $miDB = new PDO($dsn, $username, $password);
                    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "SELECT T01_CodUsuario,T01_Password,T01_DescUsuario  FROM T_01Usuario 
                      WHERE T01_CodUsuario= :usuario AND T01_Password = sha2(:passwd,256)";

                    $resultado = $miDB->prepare($sql);
                    $resultado->execute([
                        ':usuario' => $_SERVER['PHP_AUTH_USER'],
                        ':passwd' => $usuarioPasswd]);

                    $usuarioBD = $resultado->fetch();
                    // Si no exite, se vuelve a pedir las credenciales.
                    if (!$usuarioBD || $usuarioBD['T01_Password'] !== hash('sha256', $usuarioPasswd)) {
                        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
                        header('HTTP/1.0 401 Unauthorized');
                        echo "Credenciales incorrectas!";
                        exit;
                    }
                } catch (Exception $ex) {
                    echo"Error: " . $ex->getMessage();
                    exit;
                }
                ?>
            </section>
            <h2>Bienvenido/a, <?php echo $usuarioBD['T01_DescUsuario'];?> </h2>
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
