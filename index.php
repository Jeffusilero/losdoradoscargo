<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
<form action="registro.php" name="registro" method="post">
    <img src="./img/LOS DORADOS.png" alt="los dorados cargos" width="140px">
    <h2>oficina</h2>
    <div class="clas_1">
        <label for="guia">Consulta</label> <br>
        <input type="text" name="guia" id="guia" placeholder="GUA45603215330">

<br><br>
    <div class="boton">
        <button name="consulta" value="Enviar">Registrar</button>
    </div>
    <br>
    <div>
        <table class="tabla">
            <thead>
                <th class="cuadro">GUIA</th>
                <th class="cuadro">NOMBRE </th>
                <th class="cuadro">TELEFONO</th>
                <th class="cuadro">POSICION</th>
            </thead>
            <tbody id="content">

            </tbody>
        </table>
    </div>
    
    <div>

    </div>


</form>
</body>
</html>