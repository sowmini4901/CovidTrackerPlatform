<?php

if (isset($_POST['update']))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "volunteer";

    $conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);



    $name=$_POST['name'];
    $password=$_POST['password'];
    $category=$_POST['category'];
    $portfolio=$_POST['portfolio'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    

    $query1 = "update register set name = '$name', category = '$category', portfolio = '$portfolio', contact = '$contact', email = '$email' where password = '$password' ";

    $result = mysqli_query($conn,$query1);

    if($result)
    {
        header("Location: http://localhost/covid/updated.html");

    } else{
        header("Location: http://localhost/covid/unable.html");

    }
    mysqli_close($conn);


}

?>