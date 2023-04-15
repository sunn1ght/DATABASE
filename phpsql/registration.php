<?php 
$conn = mysqli_connect("localhost", "root", "", "kodiki");
if ($conn == false){
    die("он сдох" . mysqli_connect_error());
}
echo "<h1>подключение прошло успешно!";

$login = $_POST['login'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$sql_insert = "INSERT INTO users (login, email, tel, pass)
        VALUES ('" . $login . " ',
                 '" . $email . " ', 
                 '" . $tel . " ',
                 '" . $pass1 . " ')";
if (mysqli_query($conn, $sql_insert)){
    echo "<br>данные успешно отравлены";
} else{
    echo "<br>данные не отправлены" . mysqli_error($conn);
}

$sql_select = "SELECT login FROM users";
if($result = mysqli_query($conn, $sql_select)){
    foreach($result as $row){
        echo "<br>". $row["login"];
    }
}

mysqli_close($conn);