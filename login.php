<?PHP
    require_once("./include/global_config.php");

    if(isset($_POST['submitted']))
    {
    if($bsmmembersite->Login())
        {
            $bsmmembersite->RedirectToURL("dashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>LogIn</title>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width-device-width, initial-scala=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="font.css">
</head>

<body>
    <div class="container">
        <img src="images/log.png">
        <div class='alert'><span class='error'><?php echo $bsmmembersite->GetErrorMessage(); ?></span></div>
        <form id='login' action='<?php echo $bsmmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <div class="form-input">
                <input type='user' name='username' id='username' value='<?php echo $bsmmembersite->SafeDisplay('username') ?>' maxlength="50" />
            </div>
            <div class="form-input">
                <input type='password' name='password' id='password' />
            </div>
            <input type="submit" name="submit" value="LOGIN" class="btn-login">
        </form><br>
        <a href="#">Forget Password?</a>
    </div>
    <footer>
        <p>Login Form Powered By <a class="footer-text" href="#">Ichsan Budiarto</a></p>
    </footer>
</body>

</html>