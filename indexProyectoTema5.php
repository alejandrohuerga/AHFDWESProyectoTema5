<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Double:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Alejandro De la Huerga</title>
    <link rel="stylesheet" href="webroot/css/estilos.css"/>
</head>
<body>
    <header>
        <div id="logo">
            <h1><a href="../index.html">Alejandro De la Huerga </a></h1>
        </div> 
    </header>
    <main>
        <h3>CONTENIDO FICHEROS EXTERNOS</h3>
        <table id="scripts">
            <tr>
                <th>Descripción</th>
                <th>Desarrollo</th>
                <th>Explotación</th>

                <th>Descriptción</th>
                <th>Desarrollo</th>
                <th>Explotación</th>
            </tr>
            <tr>
                <td class="texto">Creación de la base de Datos y del usuario. </td>
                <td class="iconos"> <a href="mostrarCodigo/muestraCreaDBAHFDWESProyectoTema5.php"><img src="doc/images/eye.png" class="logo" alt=""/></a></td>
                <td class="iconos" rowspan="2" > <a href="https://github.com/alejandrohuerga/AHFDAWProyectoDAW/blob/master/EntornoDeExplotacion.md">Instalación </a> <br>
                    <a href="mostrarCodigo/muestraCreaDBAHFDWESProyectoTema5.php"><img src="doc/images/eye.png" class="logo" alt=""/> </a>  </td>
                <td class="texto">Librería Validación . </td>
                <td class="iconos" colspan="2"> <a href="mostrarCodigo/muestraLibreriaValidacion.php"><img src="doc/images/eye.png" class="logo" alt=""/> </a>  </td>
<!--                        <td class="iconos"> <a href="mostrarcodigo/muestraMiLibreriaStatic.php"><i class="fa-solid fa-eye"></i> </a>  </td>-->
            </tr>

            <tr>

                <td class="texto">Carga de la base de Datos. </td>
                <td class="iconos"> <a href="mostrarCodigo/muestraCargaInicialDBAHFDWESProyectoTema5.php"><img src="doc/images/eye.png" class="logo" alt=""/></a>  </td>
<!--                         <td class="iconos"> <a href="mostrarcodigo/muestraDBVGDWESProyectoTema5.php"><i class="fa-solid fa-eye"></i> </a>  </td>-->
                <td class="texto" rowspan="2">Fichero de configuración PDO. </td>
                <td class="iconos" rowspan="2"> <a href="mostrarCodigo/muestraConfPDODesarrollo.php"><img src="doc/images/eye.png" class="logo" alt=""/> </a></td>
                <td class="iconos" rowspan="2"> <a href="mostrarCodigo/muestraConfPDOExplotación.php"><img src="doc/images/eye.png" class="logo" alt=""/> </a></td>
            </tr>
            <tr>
                <td class="texto">Borrado de la base de Datos. </td>
                <td class="iconos"> <a href="mostrarCodigo/muestraBorraDBAHFDWESProyectoTema5.php"><img src="doc/images/eye.png" class="logo" alt=""/> </a>  </td>
                <td class="iconos"> <a href=""><img src="doc/images/eye.png" class="logo" alt=""/> </a>  </td>
            </tr>
        </table>
            <!--
            <thead>
                <tr>
                    <th rowspan="2">SCRIPTS</th>
                    <th>ENTORNO DESARROLLO</th>
                    <th colspan="2">ENTORNO EXPLOTACIÓN</th>
                </tr>
                <tr>
                    <th>VER CÓDIGO</th>
                    <th>EJECUTAR</th>
                    <th>VER CÓDIGO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>SCRIPT CREACIÓN</th>
                    <td>
                        <a href="mostrarCodigo/muestraCreaDBAHFDWESProyectoTema5.php">
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarcodigo/mostrarCreacionBDExplotacion.php" >
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarCodigo/mostrarCreacionBDDesarrollo.php" >
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>CARGA INICIAL</th>
                    <td>
                        <a href="mostrarCodigo/muestraCargaInicialDBAHFDWESProyectoTema5.php">
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarCodigo/mostrarCargaInicialBD.php">
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarCodigo/mostrarCreacionBDDesarrollo.php" >
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>SCRIPT BORRADO</th>
                    <td>
                        <a href="mostrarCodigo/muestraBorraDBAHFDWESProyectoTema5.php" >
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarCodigo/mostrarBorradoBDExplotacion.php">
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="mostrarCodigo/mostrarCreacionBDDesarrollo.php" >
                            <img src="" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
            -->
        <table id="ejercicios">
            <thead>
                <tr>
                    <th>NÚMERO</th>
                    <th>ENUNCIADO</th>
                    <th colspan="2">PDO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>0</td>
                    <td>Mostrar el contenido de las variables superglobales y phpinfo().</td>
                    <td>
                        <a href="mostrarCodigo/muestraEjercicio00.php" >
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="codigoPHP/ejercicio00.php" >
                            <img src="doc/images/play.svg" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header()</td>
                    <td>
                        <a href="mostrarCodigo/muestraEjercicio01.php" >
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="codigoPHP/ejercicio01.php" >
                            <img src="doc/images/play.svg" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Desarrollo de un control de acceso con identificación del usuario basado en la función header() y
                        en el uso de una tabla “Usuario” de la base de datos. (PDO)</td>
                    <td>
                        <a href="mostrarCodigo/muestraEjercicio02.php" >
                            <img src="doc/images/eye.png" class="logo" alt=""/>
                        </a>
                    </td>
                    <td>
                        <a href="codigoPHP/ejercicio02.php" >
                            <img src="doc/images/play.svg" class="logo" alt=""/>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <a href="../AHFDWESProyectoDWES/indexProyectoDWES.php">
            <p>Alejandro De la Huerga</p>
        </a>
        <a href="https://github.com/alejandrohuerga/AHFDWESProyectoTema4.git">
            <img src="doc/images/github-logo.png" class="logo" alt=""/>
        </a>
    </footer>
</body>
</html>
