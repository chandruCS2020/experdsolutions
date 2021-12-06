<?php
    $servername = "localhost";
    $username = "u706842099_experdsolution";
    $password = "ExperdSolution@123";
    $dbname = "u706842099_experd";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    if(isset($_POST['submit'])){
        $Fname = mysqli_real_escape_string($conn, $_POST['FName']);
        $Lname=mysqli_real_escape_string($conn, $_POST['LName']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $id=uniqid();
        $sql = "INSERT INTO subscribe(Firstname,Lastname,Email,Uid)  VALUES ('$Fname', '$Lname', '$email','$id')";
        if ($conn->query($sql) === TRUE) {
            header("location:https://experdsolutions.com/");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }else
    {
        header("location:https://experdsolutions.com/");
    }
        
?>