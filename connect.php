<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $courses = $_POST['courses'];
    $gender = $_POST['gender'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : ',$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, courses, gender, number)
            values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $name, $email, $courses, $gender, $number)
        $stmt->execute();
        echo "registration successful.....";
        $stmt->close();
        $conn->close();
    }
?>

