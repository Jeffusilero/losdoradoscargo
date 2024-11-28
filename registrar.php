<?php 

require './config.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar</title>
    <link rel="stylesheet" href="./css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-3">
        <h2 class="text-center">Nuevo cliente</h2>

            <div class="col-auto">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoModal"><i class="fa-solid fa-circle-plus"></i> Registrar</a>
            </div>

            <div class="col-10" >
                    <a href="./index.html" class="btn btn-primary"><i class="fa-solid fa-house"></i> Volver</a>
            </div>


            <table class="table table-sm table-striped table-hover mt-4">
                <thead class="table-dark">
                    <tr>
                        <th>Guia</th>
                        <th>Nombre</th>
                        <th>telefono</th>
                        <th>ubicacion</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table> 

    </div>
    

    <?php include 'nuevoModal.php'; ?>

    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>