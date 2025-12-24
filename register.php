<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
    }
    .box{
        width: 100%;
        height: 100vh;
        display: flex;
    }
    #col{
        width: 60%;
        height: 100vh;
        background: #d807d876;
    }
    img{
        width: 100%;
        height: 100vh;
    }
    .col{
        width: 35%;
        height: 100vh;
    }
    form{
        width: 100%;
        margin-top: 200px;
        margin-left: 50px;
    }
    input{
        width: 500px;
        height: 5vh;
        border-top: none;
        border-right: none;
        border-left: none;
    }
    h2{
        font-size: 45px;
    }
    button{
        width: 250px;
        height: 5vh;
        border-radius: 35px;
        border: none;
        background: #e2138fff;
    }
    .l{
        display: flex;
    }
    h3{
        margin-top: 1px;
    }
    .bx{
        width: 60%;
        height: 100vh;
        position: absolute;
        z-index: -1;
    }
</style>
<body>
    <?php include "db.php"; ?>
<div class="bx">
    <img src="https://avatars.mds.yandex.net/i?id=1738244a82ae01b5e621b0b1b8c7218170255f4b-5220654-images-thumbs&n=13" alt="">
</div>
<div class="box">
    <div id="col" class="col">

    </div>
    <div class="col">
    <form action="" method="POST">
        <h2>Sign Up</h2>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br>
        <h4>I agree to the Terms of User</h4>
       <div class="l">
        <button type="submit" name="send">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <h3>Sign Up</h3>
       </div>
    </form>
    </div>
</div>

<?php
$msg="";
if (isset($_POST['send'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $p = md5($p);

    $sql = "INSERT INTO users (username, password) VALUES ('$u', '$p')";
    if ($connect->query($sql)) {
        $msg = "Ro‘yxatdan o‘tdingiz!";
    } else {
        $msg = "Xatolik: " . $connect->error;
    }
}
?>

<div style="margin-left: 1000px; margin-top: -50px; font-size: 20px;">
    <?php echo $msg; ?>
</div>
</body>
</html>