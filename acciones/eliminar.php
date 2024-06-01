<?php


$id = $_GET['id'];
include "../confing/bd.php";

$query = eliminar($id);

header('location:../index.php');

