<?php
//php만 쓸꺼면 닫힌 태그 안쓰는게 속도에 영향줌
session_start();

$connStr = "mysql:host=gondr.asuscomm.com;dbname=yy_30220;charset=utf8mb4;";
$user = "yy_30220";
$pass = "1234";

$con = new PDO($connStr, $user, $pass);


function fetchAll($con, $sql, $data) {
    $q = $con->prepare($sql);
    $q->execute($data);

    return $q->fetchAll(PDO::FETCH_OBJ);
}

function fetch($con, $sql, $data) {
    $q = $con->prepare($sql);
    $q->execute($data);

    return $q->fetch(PDO::FETCH_OBJ);
}

function query($con, $sql, $data) {
    $q = $con->prepare($sql);
    $q->execute($data);
    
    return $q->rowCount();
}

function msgAndGo($msg, $target) {
    echo "<script>
            alert('$msg'); 
            location.href = '$target';
          </script>";
}