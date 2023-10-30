<?php
session_start(); 
require_once "User.php"; 
if(isset($_POST["username"])){
    // check password etc. 
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_FULL_SPECIAL_CHARS); 
    $_SESSION["user"]=new User($username); 
    $request=filter_input(INPUT_GET,"request",FILTER_SANITIZE_URL); 
    header("Location: " . $request); 
}
?>


<html>
    <form method="post">
        <input type="text" name="username" placeholder="username"/><br/>
        <input type="password" name="password" placeholder="password"/><br/>
        <input type="submit"/>
    </form>
</html>