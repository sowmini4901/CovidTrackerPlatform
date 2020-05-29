<?php

if (isset($_POST['update']))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hospital";

    $conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);



    $patientname=$_POST['name'];
    $lastname=$_POST['lname'];

    $query1 = "update register set email = '$lastname' where patientname = '$patientname' ";

    $result = mysqli_query($conn,$query1);

    if($result)
    {
        echo "Data Updated... ";

    } else{
        echo "Data not Updated";

    }
    mysqli_close($conn);


}

?>