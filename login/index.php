<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color:grey">
    <div class="container">
        <h1 class="text-center" style="">SignUp</h1>
        <div class="card">
            <div class="card-body">
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="pwd">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPwd">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                <?php
                if(!isset($_GET['message'])){
                    exit();
                }
                else{
                    $data = $_GET['message'];
                    if($data == 'success') {
                        echo '<div class="alert alert-success">Sign Up Success</div>';
                    }
                    else if ($data == 'empty'){
                        echo '<div class="alert alert-warning">All fields required</div>';
                    }
                    else if ($data == 'nomatch'){
                        echo '<div class="alert alert-danger">Passwords should match</div>';
                    }
                    else if ($data == 'exists'){
                        echo '<div class="alert alert-info">Email already exists</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>