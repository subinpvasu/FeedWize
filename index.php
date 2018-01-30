<?php

$url = parse_url(getenv("mysql://b6cdd705707835:8cf82617@us-cdbr-iron-east-05.cleardb.net/heroku_6bdbd53fbe793dd?reconnect=true"));
var_dump(parse_url(getenv("mysql://b6cdd705707835:8cf82617@us-cdbr-iron-east-05.cleardb.net/heroku_6bdbd53fbe793dd?reconnect=true")));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully ";

/*$result = $conn->query("SELECT NOW()");
$row = mysqli_fetch_array($result);*/
echo '<pre>';
print_r($url);
echo '</pre>';

//echo phpinfo();