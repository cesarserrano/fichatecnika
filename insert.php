<?php
$servername = "mysql.hostinger.com.br";
$database = "u288475803_ftec";
$username = "u288475803_root";
$password = "admin123admin";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql = "INSERT INTO `nome`(`desc`) VALUES ('$_POST[nome]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `funcao`(`desc`) VALUES ('$_POST[funcao]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO `peca`(`desc`) VALUES ('$_POST[peca]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO `grupo`(`desc`) VALUES ('$_POST[grupo]')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);

header('Location: http://fichatecnika.vitrinum.com');    
?>
