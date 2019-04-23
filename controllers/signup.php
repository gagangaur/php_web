<?php
include '../config/config.php';
if(isset($_POST)){
$queryString = $conn->prepare("insert into user (name,email,password) VALUES (?, ?, ?)");
$queryString->bind_param("sss", $name, $email, $password);
$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
if($queryString->execute()){
    $return = 1;
    echo json_encode($return);
    $data = file_get_contents("../user.json");
        $json = json_decode($data,true);
        $user = array("email" => $email);
        $json[$email] = $user;
        $fp = fopen('../user.json', 'w');
        fwrite($fp, json_encode($json));
        fclose($fp);
}else{
    $return = 0;
}

$queryString->close();
$conn->close();}
else{
    $return = 0;
}

?>