<?php
include("includes/includedFiles.php");


?>

<div class="userDetails">
    <form action="includes/handlers/ajax/saveSing.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h2>Añadir Canción</h2>
            <input type="text" name="titulo" class="oldPassword" placeholder="Titulo">

            <label for="artista">Artista</label>
            <select name="artista" id="artista" class="">
                <option value="">Seleccione un artista</option>
                <?php
                $query_artista = mysqli_query($con, "SELECT * FROM artists");
                while ($row_artista = mysqli_fetch_assoc($query_artista)) {
                    $id_artista = $row_artista['id'];
                    $nombre_artista = $row_artista['name'];
                    echo "<option value='$id_artista'>$nombre_artista</option>";
                }
                ?>
            </select>

            <label for="album">Album</label>
            <select name="album" id="album" class="">
                <option value="">Seleccione un álbum</option>
                <?php
                $query_album = mysqli_query($con, "SELECT * FROM albums");
                while ($row_album = mysqli_fetch_assoc($query_album)) {
                    $id_album = $row_album['id'];
                    $nombre_album = $row_album['title'];
                    echo "<option value='$id_album'>$nombre_album</option>";
                }
                ?>
            </select>

            <label for="genero">Género</label>
            <select name="genero" id="genero" class="">
                <option value="">Seleccione un género</option>
                <?php
                $query_genero = mysqli_query($con, "SELECT * FROM genres");
                while ($row_genero = mysqli_fetch_assoc($query_genero)) {
                    $id_genero = $row_genero['id'];
                    $nombre_genero = $row_genero['name'];
                    echo "<option value='$id_genero'>$nombre_genero</option>";
                }
                ?>
            </select>


            <input type="file" name="cancion" class="newPassword1">
            <span class="message"></span>
            <input type="submit" class="button" name="btn_enviar" value="enviar">
        </div>
    </form>
</div>
