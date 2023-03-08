<?php
    include_once "dbc.php";
    $name =$_POST['Fname'];
    $email =$_POST['Email'];
    $massages =$_POST['massage'];

    $sql="INSERT INTO regsheet(name,email,massages) VALUES ('$name','$email','$massages');";
    $results =mysqli_query($con,$sql);
    header("Location:index.html?Successfully_added_massage_to_the_database");
