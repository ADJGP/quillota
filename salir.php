<?php
    #Obtengo la sesion
    session_start();

    #Elimino la sesion activa
    if(session_destroy()){

        #Redireccion al login
        header("Location: login.php");
    }
?>