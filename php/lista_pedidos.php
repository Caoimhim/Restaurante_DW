<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../javascript/ListaPedidos.js"></script>
    <title>Lista de Pedidos</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
        <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
        <img class="w3-display-right" src="../img/logo.png" alt="logo" width="60" height="60">
    </header>
    
    <nav class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off w3-top" id="myNavbar">
        <a href="lista_pedidos.php" class="w3-bar-item w3-button w3-mobile">LISTA DE PEDIDOS</a>
        <a href="modificar_platillos.php" class="w3-bar-item w3-button w3-mobile">MODIFICAR PLATILLO</a>
        <a href="crear_platillo.php" class="w3-bar-item w3-button w3-mobile">CREAR PLATILLO</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-right">LOGOUT</a>
    </nav>

    <main>
        <div class="w3-container w3-padding-64 w3-sand w3-grayscale-min w3-xlarge">
            <div class="w3-container w3-center w3-padding-16 w3-sand">
                <h1 class="w3-jumbo">Lista de Pedidos</h1>
            </div>
            <div class="w3-responsive w3-padding-64">
                <table class="w3-table w3-bordered w3-xlarge w3-hoverable w3-centered w3-sand">
                    <thead>
                        <tr class="w3-black"> 
                            <th>Id</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Numero</th>
                            <th>Mail</th>
                            <th>Pedido</th>
                            <th>Aclaraciones</th>
                        </tr>
                    </thead>
                    <tbody id="TableContentPedidos">
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="w3-container w3-teal w3-black w3-center">
        <a href="https://www.facebook.com/La-Cocina-de-Allison-Thompson-102969278285943" class="fa fa-facebook w3-xxxlarge w3-padding-16"></a>
    </footer>
</body>
</html>
