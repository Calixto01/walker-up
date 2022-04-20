<?php

require("resources/views/layouts/main.php")

?>

<div class="container card my-2">
    <h1 class="text-center"><i class="bi bi-info-circle-fill"></i>Information</h1>
    <table class="table table-hover table-responsive">
        <thead class="text-center">
            <tr>
                <th><i class="bi bi-person-check-fill"></i></th>
                <th><i class="bi bi-chat-left-text-fill"></i></th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td><h5><i class="bi bi-qr-code"></i> Id De La Andadera:</h5></td>
                <td>aqui se muestra el id</td>
            </tr>
            <tr>
                <td><h5><i class="bi bi-person-fill"></i> Nombre del Usuario:</h5></td>
                <td>aqui se muestra nombre de usuario</td>
            </tr>
            <tr>
                <td><h5><i class="bi bi-envelope-fill"></i> Email:</h5></td>
                <td>aqui se muestra correo electronico</td>
            </tr>
            <tr>
                <td><h5><i class="bi bi-key-fill"></i> Password:</h5></td>
                <td>aqui se muestra la contraseña</td>
            </tr>
            <tr>
                <td><h5><i class="bi bi-phone-fill"></i> Phone:</h5></td>
                <td>aqui se muestra el telefono</td>
            </tr>
        </tbody>
    </table>
</div>