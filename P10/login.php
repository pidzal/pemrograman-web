<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if ((($username == "joko") && ($password == "passjoko")) ||
    (($username == "amir") && ($password == "passamir"))){
        echo "login sukses";
    }
else {
    echo "login gagal";
}
?>