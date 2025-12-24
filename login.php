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
        width: 50%;
        height: 100vh;
    }
    img{
        width: 100%;
        height: 100vh;
    }
    .col{
        width: 50%;
        height: 100vh;
        background: rgba(19, 78, 254, 1);
        border-radius: 25px;
        border-bottom-right-radius: 0px;
        border-top-right-radius: 0px;
    }
    form{
        width: 350px;
        height: 50vh;
        margin-top: 200px;
        margin-left: 230px;
        border: 1px solid white;
        border-radius: 12px;
        background: #fff;
        
    }
    #input{
        width: 210px;
        height: 5vh;
        margin-top: 20px;
        margin-left: 70px;
        border: 1px solid #b5b4b4ff;
        border-radius: 20px;
    }
    input{
        width: 210px;
        height: 5vh;
        margin-left: 70px;
        border: 1px solid #b5b4b4ff;
        border-radius: 20px;
    }
    button{
        width: 210px;
        height: 5.5vh;
        margin-left: 70px;
        border: none;
        border-radius: 20px;
        color: white;
        background: rgba(4, 0, 255, 1);
    }
    h2{
        margin-left: 70px;
    }
    p{
        margin-left: 70px;
    }
</style>
<body>
    <?php
session_start();
include "db.php";
?>

<div class="box">
    <div id="col" class="col">
        <img src="https://i.pinimg.com/originals/14/a0/14/14a0147f336d9fac45f7e45897bcbf9a.png" alt="">
    </div>
    <div class="col">
        <form action="" method="POST"><br>
            <h2>Hello!</h2>
            <p>Sign Up to Get Started</p>
            <input id="input" type="text" name="username" placeholder="👩‍💼Username"><br><br>
            <input type="password" name="password" placeholder="🔒Password"><br><br>
            <button type="submit" name="login">Login</button><br>
            <p>Forgot Password</p>
        </form>
    </div>
</div>

<?php
if (isset($_POST['login'])) {
    $u = $_POST['username'];    
    $p = md5($_POST['password']);

    $result = $connect->query("SELECT * FROM users WHERE username='$u' AND password='$p'");

    if ($result->num_rows == 1) {
        $_SESSION['user'] = $u;
        header("Location: home.php");
    } else {
        echo "Noto‘g‘ri login yoki parol!";
    }
}
?>

</body>
</html>