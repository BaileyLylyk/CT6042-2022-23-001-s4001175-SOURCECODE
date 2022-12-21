<?php include_once("conn.php");

$sql = "SELECT * FROM USER WHERE EMAIL = ? AND Password= ?";


if($stmt = $conn->prepare($sql)){

    $email = $_GET['email'];
    $pass = $_GET['password'];
    $stmt->bind_param("ss", $email, $pass);

    

    if($stmt->execute()){
        echo " Logged In";
        $cookie_name = "user";
        $cookie_value = $_GET['email'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        header('Location: vulnerability1.php');
    }

}




?>