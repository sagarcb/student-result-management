<?php
include_once '../db-config.php';

if (!empty($_POST)){
    $name = htmlentities($_POST['name'],ENT_QUOTES);
    $email = htmlentities($_POST['email'],ENT_QUOTES);
    $password = htmlentities($_POST['password'],ENT_QUOTES);

    if (!empty($name) && !empty($email) && !empty($password)){
        $query = "insert into admin(name,email,password) values('$name','$email','$password')";
        mysqli_query($link,$query);
        header('location:index.php');
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Create Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Create Account</h3>
                    <form action="" class="login-form" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control rounded-left" placeholder="Name" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="email" name="email" class="form-control rounded-left" placeholder="email" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" name="password" class="form-control rounded-left" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Create Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

