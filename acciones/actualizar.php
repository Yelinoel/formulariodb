<?php
#capturar los datos del fomulario
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$foto=$_FILES['foto'];
include "../confing/bd.php";

if($foto['size']==0){
    $query=actualizarSinfoto($id, $nombre, $email);
}else{
    $foto=addslashes(file_get_contents ($foto ['tmp_name']));
    $query=actualizar($id,$nombre,$email,$foto);
}

header ("location: ../editar.php?id=$id");
