<?php 
session_start([
    'cookie_lifetime' => 300,
]);
// session_destroy();

if(isset($_POST['username']) && isset($_POST['password'])){
    if('admin' == $_POST['username'] && 'password' == $_POST['password']){
        $_SESSION["Logeedin"]=true;
    }else{
        $_SESSION["Logeedin"]=false;
    }
}

if(isset($_SESSION['logout'])){
    $_SESSION["Logeedin"]=false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-ofset-20">
                <h2>Hellow Aunt Example</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-ofset-20">
                <?php
                if(true == $_SESSION["Logeedin"]){
                    echo "Hello Admin, Welcome";
                }else{
                    echo "Hellow stanger login Below.";
                }
               ?>
            </div>
        </div>
    </div>
    <?php 
    if(false == $_SESSION["Logeedin"]):
    ?>
    <form  method="POST">
        <label for="name">Name</label>
        <input type="username" name="username" id="username" min="0" max="255" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password" min="0" max="255" required>
    
        <button type="submit">Submit</button>
    </form>

    <?php 
    else:
    ?>
     <form action="auth.php" method="POST">
        <input type="hidden" name="logout" value="1">
         <button type="submit" >Logout</button>
    </form>
    <?php
    endif;
    ?>


</body>
</html>