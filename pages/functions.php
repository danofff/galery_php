<?php
$users = 'pages/users.txt';
function register($name, $pass, $email)
{
//    VALIDATION
    $name = trim(htmlspecialchars($name));
    $pass = trim(htmlspecialchars($pass));
    $email = trim(htmlspecialchars($email));
    if ($name == '' || $pass == '' || $email == '') {
        echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
        return false;
    }
    if (strlen($name) < 3 || strlen($name) > 30 ||
        strlen($pass) < 3 || strlen($pass) > 30) {
        echo "<h3/><span style='color:red;'>Values Length Must Be Between 3 And 30!</span><h3/>";
        return false;
    }
//login uniqueness check block
    global $users;
    $file = fopen($users, 'a+');
    while ($line = fgets($file, 128)) {
        $readname = substr($line, 0, strpos($line, ':'));
        if ($readname == $name) {
            echo "<h3/><span style='color:red;'>Such Login Name Is Already Used!</span><h3/>";
            return false;
        }
    }
//new user adding block
    $line = $name . ':' . md5($pass) . ':' . $email . "\r\n";
    fputs($file, $line);
    fclose($file);
    return true;
}

function login ($name, $password){
    $name = trim(htmlspecialchars($name));
    $password = trim(htmlspecialchars($password));
    $password=md5($password);
    $isexist = false;
    if ($name == '' || $password == '') {
        echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
        return false;
    }
    global $users;
    $file = fopen($users, 'a+');
    while ($line = fgets($file, 128)) {
        $readname = substr($line, 0, strpos($line, ':'));
//        ДОРАБОТАТЬ КОД ВЫБОРКИ СТРОКИ ПАРОЛЯ
        $readpassword=substr($line,strpos($line,':')+1,strrpos($line,':')-strpos($line, ':')-1);
        if ($readname == $name&&$readpassword==$password) {
            session_start();
            $_SESSION['registered-user']=$name;
            return true;
        }
    }
    echo "<h3/><span style='color:red;'>No such user, click Registration</span><h3/>";
}