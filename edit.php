<?php
include "db.php";

$id = $_GET['id'];
$user = $connect->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>

<form action="" method="POST">
    Username:
    <input type="text" name="username" value="<?= $user['username'] ?>"><br>
    Yangi Parol:
    <input type="password" name="password"><br>
    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    if ($p != "") {
        $p = md5($p);
        $sql = "UPDATE users SET username='$u', password='$p' WHERE id=$id";
    } else {
        $sql = "UPDATE users SET username='$u' WHERE id=$id";
    }

    if ($connect->query($sql)) {
        header("Location: home.php");
    } else {
        echo "Xatolik!";
    }
}
?>
