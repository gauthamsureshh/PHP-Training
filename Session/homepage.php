<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <h1>HomePage</h1>
    <?php
        echo "Welcome,",$_SESSION['username'];
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
<?php 
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: login.php");
    }
?>