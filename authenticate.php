<?php
    $username = $_POST["email"];
    $password = $_POST["password"];

if ($username == "a@a.a" && $password == "aaa") {
    header("Location:index.php?login=valid");
    die();
} else if ($username == "b@b.b" && $password == "bbb") {
    header("Location:index.php?login=valid");
    die();
} 
else {
    header("Location:login.php?login=invalid");
    die();
}
    
?> 