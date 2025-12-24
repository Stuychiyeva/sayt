<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0; 
        padding: 0; 
        background: rgba(163, 163, 163, 0.53);
    } 
    h1{
        text-align: center; 
        margin-top: 50px; 
        color: #000; 
    } 
    table{ 
        width: 800px; 
        margin-left: 370px; 
        border-collapse: collapse; 
        background-color: white; 
        font-family: sans-serif; 
    } 
    th, td{
        height: 5vh;
        text-align: center; 
        border: 1px solid #b3b3b3ff; 
    } 
    th{
        background-color: #4f4f4fff; 
        color: #fff; 
    } 
</style>
<body>
    <?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

include "bd.php";
?>

<h1>Table #09</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Amallar</th>
    </tr>

<!-- <?php
$data = $connect->query("SELECT * FROM users");

while ($row = $data->fetch_assoc()) {
    echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['username']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>
    ";
}
?> -->
</table>
</body>
</html>