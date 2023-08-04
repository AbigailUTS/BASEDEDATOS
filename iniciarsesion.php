<?php
include_once 'config.php';
    if($conn -> connect_error){
        echo "Error en la conexión";
    }else{
        $mail = $_POST['correo'];
        $pswd = $_POST['pass'];

        $regex = "/[^a-zA-Z0-9@._]/";
        $mail = preg_replace ($regex,"",$mail);

        $regex2 = "/[^a-zA-Z0-9@.$%]/";
        $pswd = preg_replace ($regex,"",$pswd);
        $contraseñaencrypt = hash('sha256', 'pswd');

$sql = "SELECT * FROM cliente WHERE correo = '$mail' AND pass = '$pswd'";
$resultado = $conn ->query($sql);

if ($resultado -> num_rows > 00) {
header("Location: ../index.html");
}
else{
    echo("<p><h1>La contraseña o correo que ingresaste son INCORRECTOS. Por favor, inténtalo de nuevo.</font></h1></p>");
}
    }
$conn -> close();
?>