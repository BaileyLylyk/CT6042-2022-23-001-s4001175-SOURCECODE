<?php include_once("conn.php");

$email = $_GET['email'];
$pass = $_GET['password'];

$sql = "SELECT * from USER WHERE EMAIL = '$email' AND PASSWORD = '$pass' ";

$result = mysqli_query($conn, $sql);
echo mysqli_num_rows($result);

if(mysqli_num_rows($result) > 0){
    session_start();
    $row = mysqli_fetch_row($result);
   
    //store data for session
    $_SESSION["loggedIn"] = true;
    $_SESSION["id"] = $row[0];
    $_SESSION["email"] = $row[1];#

    echo "Logged In!";
    print_r($_SESSION);


}else{
    //Password not valid
    echo "Email or Password is incorrect";
     }

?>