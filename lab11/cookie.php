<html lang="en">
<head>

    <!-- Latest compiled and minified Bootstrap Core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Exercise 13-1 | Using Cookies</title>
</head>

<body>
<header>
</header>


<?php
require_once("config.php");

function validLogin(){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    //very simple (and insecure) check of valid credentials.
    $sql = "SELECT * FROM Credentials WHERE Username=:user and Password=:pass";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':user',$_POST['username']);
    $statement->bindValue(':pass',$_POST['password']);
    $statement->execute();
    if($statement->rowCount()>0){
        return true;
    }
    return false;
}


function getLoginForm(){
    return "
<form action='' method='post' role='form'>
<div class ='form-group'>
  <label for='username'>Username</label>
  <input type='text' name='username' class='form-control'/>
</div>
<div class ='form-group'>
  <label for='password'>Password</label>
  <input type='password' name='password' class='form-control'/>
</div>
<input type='submit' value='Login' class='form-control' />

</form>";
}
?>
<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1>
            <?php

            if (!isset($_POST['username'])) {
                if(isset($_COOKIE['Username'])){
                    echo "Welcome ".$_COOKIE['Username'];
                }
                else {
                    echo "No post detected.";
                }}
            else{

                if(validLogin()){
                    // add 1 day to the current time for expiry time
                    $expiryTime = time()+60*60*24;
                    $name = "Username";
                    $value = $_POST['username'];
                    setcookie($name,$value,$expiryTime);
                    echo "Welcome ".$value;
                }
                else{
                    echo "login unsuccessful";
                }}
            ?>

        </h1>
        <a href="logout.php">logout</a>
    </div>
    <?php

    if (!isset($_POST['username']) && !isset($_COOKIE['Username'])){
        echo getLoginForm();
    }
    else{
        if(isset($_COOKIE['Username'])){echo "This is some content";}
        else if(validLogin()){echo "This is some content";}
        else echo getLoginForm();
    }
    ?>
</div>
</body>
</html>

