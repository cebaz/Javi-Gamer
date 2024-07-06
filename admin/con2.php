<?php 
	$conexion=mysqli_connect('localhost','root','','javi_gamer');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/php.css">
    <title>JAVI GAMER</title>
    <link rel="icon" href="../img/icono.jpeg" type="img/x-icon">
</head>
<body>
    
    
<div id="header">
        <div class="botons">
            <a class="btn" href="admin-index.html">Inicio</a>
            <a class="btn" href="cuenta-admin.php">Cuenta</a>
            <a class="btn" href="admin.php">Tablas</a>
            <a class="btn" href="stock.html">Reponer Stock</a>
        </div>
        <h1 id="title">JAVI GAMER</h1>
    </div>
    <main>
        <div class="fondotablas" id="consultas">
            <h1>Consultas</h1>
            <div id="botones">
                <a class="btn" href="con1.php">Bajo Coste</a>
                <a class="btn" href="con2.php">Ordenar por precio</a>
                <a class="btn" href="con3.php">Marca</a>
            </div>
        </div>

        <div class="fondotablas">
            <h1>Camaras</h1>
            <table border="1">
            <tr>
                <td>id_camaras</td>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Resolucion</td>
                <td>Precio</td>	
            </tr>
            
            <?php
            $sql="SELECT * FROM Camaras ORDER BY precio;";
            
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $mostrar['id_camara'] ?></td>
                <td><?php echo $mostrar['Marca'] ?></td>
                <td><?php echo $mostrar['Modelo'] ?></td>
                <td><?php echo $mostrar['Resolucion'] ?></td>
                <td><?php echo $mostrar['Precio'] ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
                        <h1>Discos</h1>
                            <tr>
                                <td>Id_Disco</td>
                                <td>Capacidad</td>
                                <td>Tipo</td>
                                <td>Marca</td>
                                <td>Precio</td>	
                            </tr>
                            
                            <?php
                            $sql="SELECT * FROM discos ORDER BY precio;";
                            
                            $result=mysqli_query($conexion,$sql);
                
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $mostrar['Id_Disco'] ?></td>
                                <td><?php echo $mostrar['Capacidad'] ?></td>
                                <td><?php echo $mostrar['Tipo'] ?></td>
                                <td><?php echo $mostrar['Marca'] ?></td>
                                <td><?php echo $mostrar['Precio'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                    </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Fuentes</h1>
                <tr>
                    <td>Id_Fuente</td>
                    <td>Marca</td>
                    <td>Watts</td>
                    <td>Modelo</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM fuentes_de_poder ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Fuente'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Watts'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Gabinete</h1>
                <tr>
                    <td>Id_Gabinete</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Coolers</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM gabinetes ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Gabinete'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Coolers'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>joysticks</h1>
                <tr>
                    <td>Id_joystick</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM joysticks ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_joystick'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Memorias Ram</h1>
                <tr>
                    <td>Id_Ram</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Velocidad(MHz)</td>
                    <td>Capacidad(GB)</td>
                    <td>Tipo</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM modulos_ram ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Ram'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Velocidad(MHz)'] ?></td>
                    <td><?php echo $mostrar['Capacidad(GB)'] ?></td>
                    <td><?php echo $mostrar['Tipo'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Monitores</h1>
                <tr>
                    <td>Id_Monitor</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Hz</td>
                    <td>Precio</td>
                    <td>Pulgadas</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM monitores ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Monitor'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Hz'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                    <td><?php echo $mostrar['Pulgadas'] ?></td>
                </tr>
                <?php
                }
                ?>
        </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Mothers</h1>
                <tr>
                    <td>Id_Mother</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Socket</td>
                    <td>Plataforma</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM mothers ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Mother'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Socket'] ?></td>
                    <td><?php echo $mostrar['Plataforma'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>Mouses</h1>
                <tr>
                    <td>Id_mouse</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM mouse ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_mouse'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>    
        </div>   
        
        <div class="fondotablas">
            <table border="1">
            <h1>procesadores</h1>
                <tr>
                    <td>Id_Procesador</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Plataforma</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM procesadores ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Procesador'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Plataforma'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div> 
        
        <div class="fondotablas">
            <table border="1">
            <h1>Targetas Graficas</h1>
                <tr>
                    <td>Id_GPU</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>capacidad(GB)</td>
                    <td>Precio</td>	
                </tr>
                
                <?php
                $sql="SELECT * FROM targetas_graficas ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_GPU'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['capacidad (GB)'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
        
        <div class="fondotablas">
            <table border="1">
            <h1>teclados</h1>
                <tr>
                    <td>Id_Teclado</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Precio</td>
               
                </tr>
                
                <?php
                $sql="SELECT * FROM teclados ORDER BY precio;";
                
                $result=mysqli_query($conexion,$sql);
    
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['Id_Teclado'] ?></td>
                    <td><?php echo $mostrar['Marca'] ?></td>
                    <td><?php echo $mostrar['Modelo'] ?></td>
                    <td><?php echo $mostrar['Precio'] ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </main>
    

    <div id="footer">
        <p style="margin: 0;">Todos los derechos reserados a Sebastián Ferraro Palmieri - 2023</p>
    </div>
</body>
</html>