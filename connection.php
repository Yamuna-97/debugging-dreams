<?php
$HOSTNAME='wp.kongu.edu';
$USERNAME='24dsc11';
$PASSWORD='24dsc11';
$DATABASE='24dsc11';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
    echo "Connection successfull";
}
else{
    die(mysqli_error($con));
}
?>