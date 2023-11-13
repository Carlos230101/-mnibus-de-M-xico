<?php
$conexion = mysqli_connect('localhost','root','','utfv') or die(mysqli_error($mysqli));
diferencia($conexion);
function diferencia($conexion){
    if(isset($_POST['enviar'])){
        insertar($conexion); }
        if(isset($_POST['eliminar'])){
            eliminar($conexion);
        }
}

function insertar($conexion){
    $no=$_POST['id'];
    $nom=$_POST['nom'];
    $tel=$_POST['tel'];
    $corr=$_POST['corr'];
    $mens=$_POST['mens'];
    $consulta="INSERT INTO usuario (id,nom,tel,corr,mens) VALUES ('$id','$nom','$tel','$corr','$mens')";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header("Location:contacto.php");
}

Function eliminar($conexion){
    $no=$_POST['no'];
    $consulta="DELETE FROM usuario WHERE id='$id'";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header("Location:contacto.php");
}
?>