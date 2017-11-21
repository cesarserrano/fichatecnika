<?php
$servername = "mysql.hostinger.com.br";
$database = "u288475803_ftec";
$username = "u288475803_root";
$password = "admin123admin";

// Create connection

$link = mysqli_connect($servername, $username, $password, $database);


 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST['term'])){
    // Prepare a select statement
    // $sql = "SELECT * FROM `nome` WHERE `desc` LIKE ?";
    $sql = "SELECT * FROM `nome`";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST['term'] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//                    echo "<p>" . $row["desc"] . "</p>";
                    echo "" . $row["desc"] . "<br>";
                }
            } else{
                echo "<p>Sem registros</p>";
                echo $sql;
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>
