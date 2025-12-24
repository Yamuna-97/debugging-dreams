<?php 
$registered=0; 
$userexists=0;

if($_SERVER['REQUEST_METHOD']=='POST'){ 
    include 'connection.php'; 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM signup WHERE name='$name'";
    $result=mysqli_query($con,$sql);

    if($result){
        $num=mysqli_num_rows($result); 
        if($num>0){
            $userexists=1;
        } else {
            $sql="INSERT INTO signup (name,email,password) VALUES ('$name','$email','$password')";
            $result=mysqli_query($con,$sql);
            if($result){
                $registered=1;
            } else {
                die(mysqli_error($con));
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <title>Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function formValidation() {
        let x=document.forms["form1"]["name"].value;
        if (x=="") {
            alert("Name must be filled out");
            return false;
        }
    }
    </script>
    <?php
    if($userexists){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> User already exists.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

    if($registered){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats</strong> You are successfully Signed Up.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
</head>
<body>
    <div class="container mt-3">
        <h2>SIGN UP</h2>
        <form action="signup.php" method="post" id="form1" name="form1" onSubmit="return formValidation()">
            <div class="mb-3 mt-3">
                <label for="name">Username:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter Username" name="name">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
