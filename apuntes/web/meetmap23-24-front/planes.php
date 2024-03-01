<?php
include('planes-data.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mapa</title>
		<meta charset="UTF-8" />
		<meta name="author" content="Daniel García Ayala"/>
		<meta name="description" content="Mapa"/>
		<meta name="editor" content="Manual"/>
        <meta name="keywords" lang="es" content=""/>
        <link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>
        <header>
            <div class="logo">
                <a href="#"><img src="./src/meetmap.png" alt="Logo de la empresa"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="./planes.html">Planes Cerca</a></li>
                    <li><a href="./planes.html">Categorías</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <div class="login">
                <i class="fa fa-user"></i>
                <a href="#" id="mostrarPopup">Iniciar sesión</a>

                <div id="popup" class="popup">
                    <div class="popup-contenido">
                        <span class="cerrar" id="cerrarPopup">&times;</span>
                        <h2>Iniciar sesión</h2>
                        <form>
                            <label>Nombre de usuario<br><input type="text" placeholder="Usuario" required></label><br><br>
                            <label>Contraseña<br><input type="password" placeholder="Contraseña" required></label><br><br>
                            <button type="submit">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            
            </div>
        </header>
        <div class="container-cat">
            <div class="planes-cercanos">
                <h1>Planes Cercanos</h1>
            </div>
        
            <div class="categorias">
                <div class="categoria">
                    <img src="https://kazetariak.eus/wp-content/uploads/2022/02/cultura.jpg" alt="Cultura">
                    <p>Cultura</p>
                </div>
                <div class="categoria">
                    <img src="https://www.gipuzkoa.eus/documents/20933/32665092/03-deportes_3.png.jpg/e35046ab-3cfd-d709-0d65-6b1221001f3b?t=1637930583543" alt="Deportes">
                    <p>Deportes</p>
                </div>
                <div class="categoria">
                    <img src="https://static.eldiario.es/clip/3a48e794-ce15-4c40-bea0-a06e38a46f6c_16-9-discover-aspect-ratio_default_0.jpg" alt="Gastronomía">
                    <p>Gastronomía</p>
                </div>
                <div class="categoria">
                    <img src="https://img.remediosdigitales.com/1b0df8/1585415476-baby-shark-version-en-navajo/375_375.jpeg" alt="Infantiles">
                    <p>Infantiles</p>
                </div>
                <div class="categoria">
                    <img src="https://app.sindicatoupm.es/wp-content/uploads/2021/02/cursos-64.jpg" alt="Cursos">
                    <p>Cursos</p>
                </div>
            </div>
        
            <div class="formulario">
                <div class="input-group">
                    <label for="evento">Estoy buscando</label>
                    <input type="text" id="evento" name="evento" placeholder="Evento o categoría" />
                </div>
        
                <div class="input-group">
                    <label for="fecha">Cuándo</label>
                    <input type="date" id="fecha" name="fecha" placeholder="Cualquier fecha" />
                </div>
            </div>
        
        
            <div class="planes">
                <div class="plan plan-a">
                    <img src="./src/tree.jpg" alt="Plan 1" />
                    <div class="plan-info">
                        <h2>Plan 1</h2>
                        <p>Descripción del Plan 1.</p>
                        <p>Lugar: Lugar 1</p>
                        <p>Fecha: Fecha 1</p>
                    </div>
                </div>
                <div class="plan plan-b">
                    <img src="./src/tree.jpg" alt="Plan 2" />
                    <div class="plan-info">
                        <h2>Plan 2</h2>
                        <p>Descripción del Plan 2.</p>
                        <p>Lugar: Lugar 2</p>
                        <p>Fecha: Fecha 2</p>
                    </div>
                </div>
            </div>
        </div>
        <footer class="pie-pagina">
            <p>&copy; 2023 Meetmap</p>
        </footer>
        <script type = "text/javascript" src="./script.js"></script>
	</body>
</html>