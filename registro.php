<?php
include_once 'config.php';
include_once 'logs.php';
$regex="/[^a-zA-Z0-9]/";
if($conn -> connect_error){
    echo "Error  en la conexión";
}
else{
    #echo "Conexión exitosa";
    $name= $_POST['nombre'];
    $name= preg_replace($regex, "", $name);
    $lastname1 = $_POST['apellido_p'];
    $lastname1 = preg_replace($regex, "", $lastname1);
    $lastname2 = $_POST['apellido_m'];
    $lastname2 = preg_replace($regex, "", $lastname2);
    $empresa = $_POST['empresa'];
    $empresa = preg_replace($regex, "", $empresa);
    $phone= $_POST['telefono'];
    $phone = preg_replace($regex, "", $phone);
    $email= $_POST['correo'];
    $email = preg_replace($regex, "", $email);
    $pswd= $_POST ['pass'];
    $pswd= preg_replace($regex, "", $pswd);
                     $sql = "INSERT INTO cliente(nombre, apellido_p, apellido_m, empresa, telefono, correo, pass) VALUES ('$name', '$lastname1', '$lastname2', '$empresa', '$phone', '$email', '$pswd')";
                         logger_register($conn, $sql);
                         #query returna booleano
                            if($conn -> query($sql)=== TRUE){
                             echo ("Registro exitoso");
                                                             }
                     else{
                     $conn -> error;
                    echo("Error en tu registro");
                                                              }
                    $conn-> close();
                     header("Location: ../index.html");
 }

?>