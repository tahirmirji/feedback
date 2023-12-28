<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "feedback_system";

$connection = mysqli_connect($db_host, $db_user,$db_password, $db_name);

if($connection)
{
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['contact'];

        $sql = "INSERT INTO `student_profile` (`register_number`, `full_name`, `email_id`, `contact_number`) VALUES (3,'".$name."', '".$email."',".$phone.")";
        $res=mysqli_query($connection,$sql);
        if($res>0)
        {
            echo "Registered Successfully.";
        }
    }

    echo "Connected";
}

?>