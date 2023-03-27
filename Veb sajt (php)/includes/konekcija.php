<?php
try {
$con = new PDO("mysql:host=localhost;dbname=lente", "root", "");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $con;
} catch(PDOException $e){
echo "Error: " . $e->getMessage();
}
?>