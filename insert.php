<?php

$con =mysqli_connect("localhost","root","");
$db =mysqli_select_db($con,'phpcrud');

if(isset($_POST['insert']))
{
    $name =$_POST['name'];
    $email=$_POST['email'];
    $designation =$_POST['designation'];
    $salary =$_POST['salary'];

    $query = "INSERT INTO  employee(`name`,`email`,`designation`,`salary`) VALUES('$name','$email','$designation','$salary')";
    $query_run =mysqli_query($con,$query);

    if($query_run){

        if($query_run){
            echo '<script> alert("Data saved"); </script>';
             //header('Location :index.php');
        }

        else{
            echo '<script> alert("data couldnt saved") ;</script> ';
        }

    }



}

?>
