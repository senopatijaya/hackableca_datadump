<?php
session_start();
if(isset($_POST['passcode'])) {
    if(md5($_POST['passcode']) == '0e039730400727287029396851702161') {
        $_SESSION['loggedin'] = true;
    }
    else {
        echo "INCORRECT PASSWORD";
    }
}
?>
<html>
<head>
<title>Server status Admin</title>
</head>
<body>
<h1>Server Status admin</h1>
<?php if(!$_SESSION['loggedin']) { ?>
    <p>Enter access code to login</p>
    <form method="post">
    <input type="text" name="passcode" placeholder="Passcode">
    <button name="submit">Login</button>    
    </form>
<?php } else { ?>
    <p>Server LOGAN </p>
    <p>Server SQL </p>
    <p>Server SPOCK </p>
    
<?php  $flag = file_get_contents("flag.txt");
    echo $flag;
} ?>
</body>
</html>
