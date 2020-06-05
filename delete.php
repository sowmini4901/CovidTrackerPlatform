<?php

if(isset($_POST['delete']))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "volunteer";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    $password=$_POST['password'];

    $query1 = "delete from register where password = '$password' ";
    $result = mysqli_query($conn,$query1);
    if($result)
    {
        header("Location: http://localhost/covid/deleted.html");
    }
    else
    {
        header("Location: http://localhost/covid/unable.html");
    }
    mysqli_close($conn);
}

?>