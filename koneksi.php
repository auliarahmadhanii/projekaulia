<?php
    
    $con = mysqli_connect("localhost", "root", "", "2055301018_UAS");
   
    if (mysqli_connect_errno($con))
    {
        echo "Failed connect to mysql: " .
        mysqli_connect_error();
    }
    else
    {
        //echo "Berhasil Terhubung";
    }

?>