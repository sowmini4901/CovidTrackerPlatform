<?php

if (isset($_POST['difference'])){



$category = $_POST['category'];
$name = $_POST['name'];
$password = $_POST['password'];
$portfolio = $_POST['portfolio'];
$contact =  $_POST['contact'];
$email = $_POST['email'];


if (!empty($category) || !empty($name) || !empty($password) || !empty($portfolio) || !empty($contact) || !empty($email)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "volunteer";  // see the name of the database
    
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());

    }else{
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register(category,name,password,portfolio,contact,email) values(?, ?, ?, ?, ?, ?)";

        //prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();

            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssis",$category,$name,$password,$portfolio,$contact,$email);
            $stmt->execute();
            echo "New record inserted successfully";

        } 
        else{
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();

    }

}else {
    echo "All fields are required";
    die();
}



}

?>