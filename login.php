<?php
$logged = 0;
$invalid = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection.php';
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM signup WHERE name='$name' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $logged = 1;
           
        } else {
            $invalid = 1;
        }
    } else {
        echo "Query failed: " . mysqli_error($con);
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
 <a class="nav-link active" href="signup.php">Signup</a>
 </li>
 </ul>
 </div>
 </nav>
 <title>login</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">
 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
 <script>
 function formValidation(){
 let x =document.forms["form2"]["Username"].value;
 if(x==""){
 alert("Name must be filled out");
 return false;
 }
 }

 </script>
 </style>

 <div class="container mt-3">
 <h2>Login</h2>
 <form action="login.php" method="post" id="form2" name="form2"
onSubmit="return formValidation()">

 <div class="mb-3 mt-3">
 <label for="name">Username</label>
 <input type="text" class="form-control" id="name" placeholder="Enter
username" name="name">
 </div>

 <div class="mb-3 mt-3">
 <label for="password">Password</label>
 <input type="password" class="form-control" id="password"
placeholder="Enter password" name="password">
 </div>
 <button type="submit" class="btn btn-primary">Login</button>
 </form>
 </body>
 </html>

 <?php
 if($logged){
 echo '<div class="alert alert-success alert-dismissible fade show"
role="alert">
 <strong>Congrats</strong> You are successfully Logged In.
 <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
 </div>';
 }
 ?>

 <?php
 if($invalid){
 echo '<div class="alert alert-danger alert-dismissible fade show"
role="alert">
 <strong>Error</strong> Invalid.
 <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
 </div>';
 }
 ?>