
<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>