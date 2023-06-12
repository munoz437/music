<?php
include("../../config.php");

    if(isset($_POST['btn_enviar'])){
        $titulo = $_POST["titulo"];
        $artista = $_POST["artista"];
        $album = $_POST["album"];
        $genero = $_POST["genero"];
        $nombre=$_FILES["cancion"]["name"];
        $path = 'assets/music/';
        $cancion=$path.$nombre;

         // Mover el archivo a la ruta deseada
         $archivo_temporal = $_FILES["cancion"]["tmp_name"];
         $ruta_destino = 'C:\\Development\\Webserver\\music\\Spotify-Clone\\assets\\music\\' . basename($_FILES["cancion"]["name"]);
         
         
         if (move_uploaded_file($archivo_temporal, $ruta_destino)) {
             echo "Archivo movido correctamente";
         } else {
             echo "Error al mover el archivo";
         }


       
        $query = mysqli_query($con, "INSERT INTO songs(title,artist,album,genre,path) VALUES ('$titulo','$artista','$album','$genero','$cancion') ");
        
        header("Location: ../../../music.php");
        exit();
    }

?>

