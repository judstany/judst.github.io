<?php
$Nom = $_POST['Noms'];
$Prenoms = $_POST['Prenoms'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$Sexe = $_POST['Sexe'];
$Metier = $_POST['Metier'];

//Connexion à la base de données
 
$conn = new mysqli('localhost','root','','test');
if($conn->connection_error){
    die('Connection failed : '.$conn->connect_error);
}else{
    $stmt  $conn->prepare()("insert into registration(Noms, Prenoms, Email, Password, Sexe, Metier)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $Noms, $Prenoms, $Email, $Password, $Sexe, $Metier);
    $stmt->excute();
    echo "registration succesful...";
    $stmt->close();
    $conn->close();

}
?>