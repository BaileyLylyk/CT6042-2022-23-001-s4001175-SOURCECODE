<?php include_once("conn.php");

$sql = "SELECT * FROM USER WHERE EMAIL = ? AND Password= ?";


if($stmt = $conn->prepare($sql)){

    $email = $_POST['email'];
    $pass = $_POST['password'];
    $stmt->bind_param("ss", $email, $pass);

    

    if($stmt->execute()){
        mysqli_stmt_store_result($stmt);

        mysqli_stmt_bind_result($stmt, $dbID,$dbEmail,$dbPassword);
        if(mysqli_stmt_fetch($stmt)){
   
            if($pass == $dbPassword){
                session_start();

                //store data for session
                $_SESSION["loggedIn"] = true;
                $_SESSION["id"] = $dbID;
                $_SESSION["email"] = $dbEmail;

                $msg = "Logged In";
                print_r($_SESSION);
                
            }

        }else{
            //Password not valid
            echo "Invalid username or Password";

        }
    }

}else{$msg ="Something went wrong please try again.";}




?>