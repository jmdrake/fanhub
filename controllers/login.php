<?php
/*
 * File : login.php
 * Input type: POST
 * Inputs: username, password
 * Outputs: Returns currentuser
 */

require "../php/querytojson.php";
require "../php/config.php";
require "../php/mark_sql_post.php";

$conn = open_connection();
$sql = mark_sql_post("SELECT id FROM Users WHERE email=[email] AND password=[password]");
$result = $conn->query($sql);
if($result) {
    $rs = $result->fetch_array(MYSQLI_ASSOC);
    $currentuser = $rs["id"];
    if($currentuser !== "")        
       setcookie("currentuser", $currentuser);
    echo $currentuser;
} else {
    echo("Unable to fetch login record");
}
$conn->close();
?>
