<?php

if(isset($_POST['delete']))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hospital";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    $name=$_POST['name'];

    $query1 = "delete from register where patientname = '$name' ";
    $result = mysqli_query($conn,$query1);
    if($result)
    {
        echo "Data deleted...";
    }
    else
    {
        echo "Data not Deleted...";
    }
    mysqli_close($conn);
}

?>