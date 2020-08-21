<?php
$servername = "u3r5w4ayhxzdrw87.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$database = "bix2j6yp4ioah07i";
$username = "glf2q4q93bhipqmm";
$password = "y8i4y8lqboy4y4u3";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
<h3>
        <center>
                <a href="/paradas">Paradas</a>
            </center>
</h3>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
    <label for="nombre_parada">Nombre Parada</label>
    <input required id="nombre_parada" type="text" class="form-control" name="nombre_parada" size="30"/>
</div><div class="form-group">
    <label for="latitud_parada">Latitud Parada</label>
    <input required id="latitud_parada" type="text" class="form-control" name="latitud_parada" size="30"/>
</div><div class="form-group">
    <label for="longitud_parada">Longitud Parada</label>
    <input required id="longitud_parada" type="text" class="form-control" name="longitud_parada" size="30"/>
</div><div class="form-group">
    <label for="identificador_p">Referencia</label>
    <input required id="identificador_p" type="text" class="form-control" name="identificador_p" size="30"/>
</div><div class="form-group">
    <label for="activo">Activo</label>
    <select  required id="activo" type="select" class="form-control" name="activo" size="1" >
        <option value="" > Selecciona el estatus </option>
        <option  value="1"> Activo </option>
        <option  value="0"> Inactivo </option>
    </select>
</div><div class="form-group">
    <label for="id_ruta">Ruta</label>
    <select  required id="id_ruta" type="select" class="form-control" name="id_ruta" size="1" >
        <option value="" > Selecciona una ruta </option>
        <option  value="1"> Tulancingo-Cuautepec </option>
        <option  value="2"> Tulancingo-Preferida </option>
        <option  value="3"> Indeco Aldama </option>
        <option  value="4"> Felipe Angeles </option>
        <option  value="5"> Cuautepec-Tulancingo </option>
    </select>
</div>

    <div class="form-group">
        <label></label>
        <button id="send" name="send" class="form-control"><span class="glyphicon glyphicon-save"></span> Guardar</button>
    </div>
</form>
<br>
<br>
