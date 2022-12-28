<?php  
$sanitisedMsg = htmlspecialchars($_GET['message'], ENT_QUOTES, 'UTF-8');

echo "<div> Message: ".$sanitisedMsg."</div>";

?>