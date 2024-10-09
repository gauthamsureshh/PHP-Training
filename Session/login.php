<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br>
        <label>Password</label><br>
        <input type="password" name="password">
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: homepage.php");
        }
        else{
            echo "Username and Password required";
        }
    }  
?>