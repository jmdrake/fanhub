<?php

require "../php/config.php";
// require "../php/insertfrompost.php";
require "../php/mark_sql_post.php";
echo "Hello world";
$conn = open_connection();
$sql = mark_sql_post("INSERT INTO Users(name, email, password) VALUES ([name], [email], [password])");

if ($conn->query($sql) === TRUE) {
    echo "Ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>