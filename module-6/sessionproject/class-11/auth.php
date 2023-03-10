<?php

session_start([
    'cookie_lifetime' => 300, // 5 min
]);
$error=false;
//  session_destroy();

//password hiden


if (isset($_POST['username']) && isset($_POST['password'])) {
    if ('admin' == $_POST['username'] && 'a51e47f646375ab6bf5dd2c42d3e6181' == md5($_POST['password'])) {
        $_SESSION['loggedin'] = true;
    } else {
        $error=true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Session Project</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Simple Auth Exampale</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php
                //md5 sha1 password create unique 
                echo md5("rabbit")."<br/>";

                if (true == $_SESSION['loggedin']) {
                    echo " Hello Admin,Welcome";
                } else {
                    echo "Hello Stranger,login Below";
                }
                ?>

            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php 
            //user name password doni mathch message
                if($error){
                   echo "<blockquote>username and password did't match</blockquote>"; 
                }
                if(false==$_SESSION['loggedin']):
                
                ?>
                <form method="POST">
                    <div class="">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" aria-describedby="emailHelp">

                    </div>
                    <div class=" ">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Log In</button>
                </form>
                <?php 
                else:
                ?>
                    <form action="auth.php?logout=true" method="POST">
                        <input type="hidden" name="logout" value="1">
                    <button type="submit" class="btn btn-primary" name="submit">Log Out</button>
                </form>
                <?php 
                endif;
                ?>
            </div>

        </div>

    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>