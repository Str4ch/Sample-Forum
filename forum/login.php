<?php
$errorMessage = '';
if(isset($_GET['Err'])){
    $errorMessage = 'Login failed';
}
?>
<html>
<link rel="stylesheet" href="../Styles.css"/>
<body id="bd">

<div id="Login">

    <form id="loginform" action="loginaction.php" method="post">
        <p style="color: red; font-size: 20px;"><?php echo $errorMessage;?></p>
        Username <input type = "username" name = "Uinput" placeholder = "Enter your username" />
        Password <input type = "password" name = "Pinput" placeholder = "Enter your password" />
        <br>
        <input type = "submit">
    </form>
</div>
</body>
</html>
