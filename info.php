<?php
    require("resources/views/layouts/main.php");
    require_once 'servidor/db.php';

    session_start();
    if(isset($_SESSION['usuario'])){
        $idUsers = $_SESSION['usuario'];
        $datos = $conexion -> prepare("SELECT * FROM users WHERE id_users = '$idUsers'");
        $datos->execute();
?>
                             

<div class="container">
    <h1 class="text-center"><i class="bi bi-info-circle-fill"></i>Information</h1>
    <table class="table table-hover table-responsive">
        <thead class="text-center">
            <tr>
                <th><i class="bi bi-person-check-fill"></i></th>
                <th><i class="bi bi-chat-left-text-fill"></i></th>
            </tr>
        </thead>
        <tbody class="text-center">
            
            
            <?php while($data=$datos->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <td class="col-5"><h5><i class="bi bi-qr-code"></i> Id De La Andadera:</h5></td>
                    <td class="col-5"><?php echo $data['id_walker'];?></td>
                </tr>
                <tr>
                    <td><h5><i class="bi bi-person-fill"></i> Nombre del Usuario:</h5></td>
                    <td><?php echo $data['name_user'];?></td>
                </tr>
                <tr>
                    <td><h5><i class="bi bi-envelope-fill"></i> Email:</h5></td>
                    <td><?php echo $data['email'];?></td>
                </tr>
                <tr>
                    <td><h5><i class="bi bi-key-fill"></i> Password:</h5></td>
                    <td><p type="password"><?php echo $data['passwd'];?></p></td>
                </tr>
                <tr>
                    <td><h5><i class="bi bi-phone-fill"></i> Phone:</h5></td>
                    <td><?php echo $data['phone'];?></td>
                </tr>
                <?php 
		}
		?>
        </tbody>
    </table>
</div>


<?php }else{
    header("Location: /resources/out/login.php");
    }?>