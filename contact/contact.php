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
        $name = mysqli_real_escape_string($conn, $_POST['Name']);
        $phone=mysqli_real_escape_string($conn, $_POST['mobile']);
        $email=mysqli_real_escape_string($conn, $_POST['Email']);
        $message = mysqli_real_escape_string($conn, $_POST['mesaage']);
        $id=uniqid();
        $sql = "INSERT INTO contact(Name,Mobile_No,Email,Message,Uid) VALUES ('$name', '$phone', '$email','$message','$id')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $headers = "From:" . $email;
            $subject="Someone Needs You";
            $mobile="Mobile Number : ".$phone;
            $msg="$mobile\n$message";
            if(empty($name) || empty( $phone) || empty($msg) || empty($email)  || empty($subject))
            {
                header('location:contact.html');
            }
            else
            {
                $to = "support@curatedsolutions.in";
                $to2="experdsolutions.hr@gmail.com";
                if(mail($to,$subject,$msg, $headers) && mail($to2,$subject,$msg,$headers) )
                {
                    header("location:thanks.html");
                }
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }else
    {
        header("location:contact.html");
    }
        
?>