<?php 
    session_start();
    require("db.php");

    $fname = $_POST['firstName'];    
    $lname = $_POST['lastName'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $place = $_POST['place'];
    $curp = $_POST['curp'];
    $nss = $_POST['nss'];
    $rfc = $_POST['rfc'];
    $problem = $_POST['problem'];

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $conexion ->prepare("INSERT INTO `old_person` (`id_carer`, `NSS`, `firstName`, `lastName`, `age`, `dateOfBirth`, `placeOfBirth`, `CURP`, `RFC`, `healtProblem`) VALUES (:id, :n, :f, :l, :a, :b, :p, :c, :r, :h);");

    $query -> bindParam(":id", $_SESSION['usuario']);
    $query -> bindParam(":n", $nss);
    $query -> bindParam(":f", $fname);
    $query -> bindParam(":l", $lname);
    $query -> bindParam(":a", $age);
    $query -> bindParam(":b", $birthday);
    $query -> bindParam(":p", $place);
    $query -> bindParam(":c", $curp);
    $query -> bindParam(":r", $rfc);
    $query -> bindParam(":h", $problem);

    $query -> execute();

    header('Location: /index.php?');
?>