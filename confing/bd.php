<?php 
function conexion(){
     $conexion= mysqli_connect("localhost", "root", "", "crud");
     return $conexion;
     
}
function listar(){
     $sql="SELECT * FROM Alumno";
     $query=mysqli_query(conexion(),$sql);
     return $query;
     


}
function insertar( $nombre, $email, $foto){
     $sql = "INSERT INTO Alumno(nombre, email, foto) values('$nombre','$email','$foto')";
     $query = mysqli_query(conexion(),$sql);
     return $query;


}

function eliminar($id){
     $sql = "DELETE from Alumno WHERE id=$id";
     $query = mysqli_query(conexion(),$sql);
     return $query;


}

function ListarunAlumno($id){
     $sql = "SELECT * FROM Alumno WHERE id=$id";
     $query = mysqli_query(conexion(),$sql);
     return mysqli_fetch_assoc($query);
}

function actualizar ($id, $nombre, $email, $foto){
     $sql = "UPDATE Alumno set nombre='$nombre', email='$email', foto='$foto' WHERE id=$id";
     $query = mysqli_query(conexion(),$sql);
     return $query;
}

function actualizarSinfoto ($id, $nombre, $email){
     $sql = "UPDATE Alumno set nombre='$nombre', email='$email',  WHERE id=$id";
     $query = mysqli_query(conexion(),$sql);
     return $query;
}