<?php
    //Header
    require_once("views/modulos/plantilla/header.php");

    
    //Main
    if(isset($_GET['ruta']))
    {
        if($_GET['ruta'] == "inicio" ||
        $_GET['ruta'] == "claseIndividual" ||
        $_GET['ruta'] == "clases" ||
        $_GET['ruta'] == "contacto" ||
        $_GET['ruta'] == "entrenadores" ||
        $_GET['ruta'] == "galeria" ||
        $_GET['ruta'] == "mispesos" ||
        $_GET['ruta'] == "noticias" ||
        $_GET['ruta'] == "noticiaEspecifica" ||
        $_GET['ruta'] == "perfil" ||
        $_GET['ruta'] == "pesoMovimientoEspecifico")
        {
            require_once("views/modulos/paginas/". $_GET['ruta'] .".php");
        } 
        else
        {
            require_once("views/modulos/paginas/404.php");
        }
    }
    else
    {
        require_once("views/modulos/paginas/inicio.php");
    }

    //Footer
    require_once("views/modulos/plantilla/footer.php");
?>


