<?php
echo "321";
$link = new mysqli("localhost", "root", "123456789", "roger");
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "CREATE TABLE employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
);";
$result = $link->query($sql);
// print_r($result);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while ($row = $result->fetch_assoc()) {
//         echo $row['name']."<br>";
//     }
// } else {
//     echo "0 results";
// }
// $link->close();

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

// define('DB_SERVER', 'localhost:**3306**');
// define('DB_USERNAME', 'roger');
// define('DB_PASSWORD', '123456789');
// define('DB_NAME', 'roger');
 
/* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, 3306);
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// 
// <!-- If you've downloaded the Object Oriented or PDO code examples using the download button, -->